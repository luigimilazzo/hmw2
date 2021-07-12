<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Worker;
use Request;
use Session;

class HomeController extends Controller
{
    public function index(){
        $session_id=session('id');
        $worker=Worker::find($session_id);
        if(!isset($worker))
            return view('login');
        
        return view("home")->with("username",$worker->username);
    }
    public function home()
    {
        // Leggiamo l'utente connesso
        $worker = Worker::find(session('id'));
        // Leggiamo le collection dell'utente
        $collections = $worker->collections()->orderBy('Nome')->get();
        return view('home')
            ->with('username', $worker->username)
            ->with('collections', $collections);
    }
}
