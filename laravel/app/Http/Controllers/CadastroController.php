<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro.index');
    }

    public function store(Request $formRequest)
    {
        $email = $formRequest->email;
        $senha = $formRequest->senha;
        $tipo = $formRequest->usuario_tipo;
        
        $usuario = new Usuario();
        $usuario->email = $email;
        $usuario->senha = $senha;
        $usuario->tipo = $tipo;
        $usuario->save();

        return redirect('/');
       
    }
}