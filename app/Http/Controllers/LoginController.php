<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Worker;
use Request;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        // Verifichiamo se l'utente ha già fatto il login
        if(session('id') != null)
        {
            // Redirect alla home
            return redirect('home');
        }
        else
        {
            // Verifichiamo se c'è stato un errore nel login
            $old_username = request('username');
            return view('login')
                ->with('csrf_token', csrf_token())
                ->with('old_username', $old_username);
        }
    }

    public function checkLogin()
    {
        
        $worker = Worker::where('username', request('username'))->where('password',password_verify('password',request('password')))->first();
        if(isset($worker))
        {
            // Credenziali valide
            Session::put('id', $worker->id);
            return view('home')->with('username',$worker->username);
        }
        else
        {
            // Credenziali non valide
            $old_username = request('username');
            return view('login')->with('csrf_token', csrf_token())
            ->with('old_username', $old_username);
        }
    }

    public function logout()
    {
        // Eliminiamo i dati di sessione
        Session::flush();
        // Torniamo al login
        return redirect('login');
    }
}
