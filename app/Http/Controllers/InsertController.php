<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Worker;
use App\Models\Carcere;
use Request;
use Session;

class InsertController extends Controller
{
    public function verifica(){
        $session_id=session('id');
        $worker=Worker::find($session_id);
        if(!isset($worker))
            return view('login');
        
        return view("inserisciCarcere")->with("username",$worker->username);
    }  

    public function carceri(){
        $result=Carcere::all();
        return $result;
    }

    public function inserisci($query){
        $session_id=session('id');
        $worker=Worker::find($session_id);
        $worker->carceres()->attach($query);
        return ['stato',true];
    }
}

?>