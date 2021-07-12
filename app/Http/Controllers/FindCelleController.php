<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Worker;
use App\Models\Cella;
use Request;
use Session;

class FindCelleController extends Controller
{
    public function verifica(){
        $session_id=session('id');
        $worker=Worker::find($session_id);
        if(!isset($worker))
            return view('login');
        
        return view("celle")->with("username",$worker->username);
    }  

    public function trovaCelle($query){
        $result=Cella::get()->where("id",">",$query);
        return $result;
    }



}

?>