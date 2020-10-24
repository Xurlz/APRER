<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
 
class CadastroProfissionalController extends Controller
{
    public function index(Request $formRequest)
    {
        return view('cadastro.profissional', compact('formRequest'));
    }

    public function store(Request $formRequest)
    {
        $email = $formRequest->email_profissional;
        $senha = $formRequest->senha_profissional;
        
        $usuario = new Usuario();
        $usuario->email = $email;
        $usuario->senha = $senha;

        var_dump($usuario->save());
        
        return redirect('/');
       
    }
}