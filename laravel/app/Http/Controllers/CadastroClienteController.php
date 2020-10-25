<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroClienteController extends Controller
{
    public function index(Request $formRequest)
    {
        // echo $request->url();
        return view('cadastro.cliente', compact('formRequest'));
    }

    public function store(Request $formRequest)
    {
        $email = $formRequest->email_cliente;
        $senha = $formRequest->senha_cliente;
        
        $usuario = new Usuario();
        $usuario->email = $email;
        $usuario->senha = $senha;

        return redirect('/');
       
    }
}