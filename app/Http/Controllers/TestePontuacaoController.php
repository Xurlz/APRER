<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestePontuacaoController extends Controller
{
    public function index()
    {
        return view('teste-pontuacao');
    }

    public function atualizaPontuacao(Request $request)
    {
        $tipo = $request->tipo;
        $user = $request->user();

        switch($tipo)
        {
            case 'adiciona':
                $user->addPoint(1);
            break;
            case 'reduz':
                $user->reducePoint(1);
            break;
            case 'reenicia':
                $user->resetPoint();
            break;
        }

        return redirect()->route('teste_pontuacao');
    }

}
