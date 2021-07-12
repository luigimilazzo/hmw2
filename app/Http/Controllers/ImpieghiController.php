<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Worker;
use App\Models\Comment;
use App\Models\Carcere;
use Request;
use Session;

class ImpieghiController extends Controller
{
    public function verifica(){
        $session_id=session('id');
        $worker=Worker::find($session_id);
        if(!isset($worker))
            return view('login');
        
        return view("impieghi")->with("username",$worker->username);
    }  

    public function trovaImpieghi(){
        $session_id=session('id');
        $worker=Worker::find($session_id);
        $results=$worker->carceres;
        $end=array();
        foreach($results as $result){
            $end[]=[
                'username'=>$worker->username,
                'Nome_penitenziario'=>$result->Nome_penitenziario,
                'carcere_id'=>$result->pivot->carcere_id];
            }
        return $end;
    }

    public function trovaTesto($query){
        $results=Comment::get()->where('carcere_id',$query);
        $end=array();
        foreach($results as $result){
            $end[]=[
                'username'=>$result->username,
                'carcere_id'=>$result->carcere_id,
                'testo'=>$result->testo,
                'Nome_penitenziario'=>Carcere::find($result->carcere_id)->Nome_penitenziario];
            }
        return $end;
    }

    public function addCommento($query1,$query2,$query3){
        return Comment::create([
            'testo'=>$query1,
            'username'=>$query2,
            'carcere_id'=>$query3
        ]);
    }
    public function deleteCommento($query1,$query2,$query3){
        $comment=Comment::where('username',$query1)->where('testo',$query2)->where('carcere_id',$query3)->first();
        $comment->delete();
        return ['status',true];
    }


}

?>