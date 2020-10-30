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

    public function adicionaPonto(Request $request)
    {
        // $user = $request->user();

        $user = User::find('1');
        $user->addPoint(1);
        
        return redirect()->route('teste_pontuacao');
    }

    public function reduzPonto(Request $request)
    {
        // $user = $request->user();

        $user = User::find('1');
        $user->reducePoint(1);
        
        return redirect()->route('teste_pontuacao');
    }

    public function reeniciaPonto(Request $request)
    {
        // $user = $request->user();

        $user = User::find('1');
        $user->resetPoint();
        
        return redirect()->route('teste_pontuacao');
    }
}
