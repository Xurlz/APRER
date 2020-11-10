<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class TesteAvaliacaoController extends Controller
{
    public function index()
    {
        return view('teste-avaliacao');
    }

    public function enviar(Request $request)
    {
        // print_r($request->all());
        $avaliacao = new Avaliacao;
        $avaliacao->user_id = $request->profissional_id;
        $avaliacao->nota = $request->nota;
        $avaliacao->descricao = $request->texto;
        

        var_dump([
            "profissional_id" => $request->profissional_id,
            "nota" => $request->nota,
            "texto" => $request->texto,
            "avaliacao" => $avaliacao->get(),
            "avaliacao" => $avaliacao->save(),
        ]);
        exit;
    }

    public function listar()
    {
        return view('feedback.index');
    }
}
