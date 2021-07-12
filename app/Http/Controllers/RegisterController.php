<?php
    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller;
    use App\Models\Worker;
    use Request;
    use Session;
    
    class RegisterController extends Controller{
        public function create(){
            $request=request();
            Worker::create([
                'username'=> $request->username,
                'password'=> password_hash($request->password,PASSWORD_BCRYPT),
                'email'=> $request->email,
                'CF'=> $request->cod,
                'Nome'=> $request->name,
                'Cognome'=>$request->surname,
                'Data_nascita'=>$request->dataNa
                ]);
            return view('home')->with('username',$request->username);
        }
        public function checkUsername($query){
            $exist=Worker::where('username',$query)->exists();
            return ['exists',$exist];
        }
        public function checkEmail($query){
            $exist=Worker::where('email',$query)->exists();
            return ['exists',$exist];
        }
        public function checkCF($query){
            $exist=Worker::where('CF',$query)->exists();
            return ['exists',$exist];
        }

        public function index(){
            return view('signup')->with('csrf_token',csrf_token());
        }


    }
?>