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
        
        return view('usuario.index',compact('usuario'));
    }
}