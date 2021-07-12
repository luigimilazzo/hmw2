<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Worker;
use App\Models\Content;
use Request;
use Session;

class FavouriteController extends Controller
{
    public function verifica(){
        $session_id=session('id');
        $worker=Worker::find($session_id);
        if(!isset($worker))
            return view('login');
        
        return view("preferiti")->with("username",$worker->username);
    }  

    public function contenuti(){
        $result=Content::all();
        return $result;
    }



}

?>