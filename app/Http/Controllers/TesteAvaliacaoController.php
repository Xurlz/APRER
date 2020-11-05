<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteAvaliacaoController extends Controller
{
    public function index()
    {
        return view('teste-avaliacao');
    }

    public function enviar(Request $request)
    {
        print_r($request->all());
        exit;
    }
}
