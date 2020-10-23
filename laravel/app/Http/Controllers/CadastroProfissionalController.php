<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastroProfissionalController extends Controller
{
    public function index(Request $formRequest)
    {
        return view('cadastro.profissional', compact('formRequest'));
    }

    public function store(Request $formRequest)
    {
        // Banco está inconsistente, considerar refazê-lo. Palavras estão em case sensitive.
        //Substituir por um ORM

        DB::insert(
            "INSERT INTO profissional (
               nome,
               celular,
               email,
               senha
            -- profissao_id_profissao -- Não implementado por falta de conhecimento técnico
            -- Implementar endereço
            ) 
            VALUES (
                :nome,
                :celular,
                :email,
                :senha
            );",
            // Colocar em array isolado
            [
                ":nome" => $formRequest->nome_profissional,
                ":celular" => $formRequest->numero_profissional,
                ":email" => $formRequest->email_profissional,
                ":senha" => sha1($formRequest->senha_profissional)
            ]
        );

        return redirect('/home');

    }
}