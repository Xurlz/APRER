<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastroClienteController extends Controller
{
    public function index(Request $formRequest)
    {
        // echo $request->url();
        return view('cadastro.cliente', compact('formRequest'));
    }

    public function store(Request $formRequest)
    {
        // Banco está inconsistente, considerar refazê-lo. Palavras estão em case sensitive.
        // Banco de dados não condiz com o formulário
        //Substituir por um ORM
        DB::insert(
            "INSERT INTO cliente (
                Nome,
                -- data_nascimento, -- Não usado
                celular,
                email,
                -- lat, -- Não usado
                -- lng, -- Não usado
                senha
            ) 
            VALUES (
                :nome,
                -- :data_nascimento,
                :celular,
                :email,
                -- :lat,
                -- :lng, 
                :senha
            );",
            // Colocar em array isolado
            [
                ":nome" => $formRequest->nome_cliente,
                // ":data_nascimento" => $formRequest->data_nascimento, // Não usado
                ":celular" => $formRequest->tel_cliente,
                ":email" => $formRequest->email_cliente,
                // ":lat" => $formRequest->lat, // Não usado
                // ":lng" => $formRequest->lng, // Não usado
                ":senha" => sha1($formRequest->senha)
            ]
        );

        return redirect('/');
       
    }
}