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

    public function login(Request $loginRequest)
    {
        echo $loginRequest->url();
        var_dump($_POST);
        exit;
        return redirect('/home');
    }

    public function handle(Request $loginRequest)
    {
        // echo "login handle";
        // echo $loginRequest->usuario;
        // echo $loginRequest->senha;
        var_dump(

            $this->userFetch(
                $loginRequest->usuario,
                sha1($loginRequest->senha)
            )

        );
            
        // var_dump($_POST);
    }

    private function userFetch($usuario, $senha)
    {
        // implementado com padrões não recomendados
        return 
        DB::select(
            "SELECT
                *
                -- email,
                -- nome,
                -- senha
            FROM 
                cliente as c,
                profissional as p
            WHERE
                c.email = {$usuario} AND
                p.email = {$usuario} AND
            "
        );
    }
}