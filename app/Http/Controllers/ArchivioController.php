<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Worker;
use App\Models\Prisoner;
use App\Models\Carcere;
use Request;
use Session;

class ArchivioController extends Controller
{
    public function verifica(){
        $session_id=session('id');
        $worker=Worker::find($session_id);
        if(!isset($worker))
            return view('login');
        
        return view("archivio")->with("username",$worker->username);
    }  

    public function detenuti($query){
        $results=Prisoner::get()->where('Cognome','like',$query);
        $end=array();
        foreach($results as $result){
            $end[]=['Nome'=>$result->Nome,
                'Cognome'=>$result->Cognome,
                'Nome_penitenziario'=>Carcere::find($result->carcere_id)->Nome_penitenziario];
        }

        return $end;
    }



}

?>