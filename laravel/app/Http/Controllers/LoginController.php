<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.index');
    }

    public function login(Request $loginRequest)
    {
        echo $loginRequest->url();
        var_dump($_POST);
        exit;
        return redirect('/home');
    }

    public function handle(Request $loginRequest)
    {
        $email = $loginRequest->usuario;
        $senha = $loginRequest->senha;

        
        $usuario['email'] = 
            DB::table('usuarios')
            ->where([
                ['email', $email],
                ['senha', $senha]
            ])
            ->value('email')
        ;
        
        $usuario['senha'] =
            DB::table('usuarios')
            ->where([
                ['email', $email],
                ['senha', $senha]
            ])
            ->value('senha')
        ;
        
        return view('cliente.index',compact('usuario'));
    }
}