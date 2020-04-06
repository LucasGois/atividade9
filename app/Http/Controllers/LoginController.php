<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(){
        return view("login");
    }

    function entrar(Request $req){
        $login = $req->input('login');
        $senha = $req->input('senha');

        $usuario = Usuario::where('login', '=', $login)->first();

        if ($usuario and $usuario->senha == $senha){
            //se nao é null, entra aqui
            //login e senha estão certos
            return redirect()->route('listar');
        } else {
            return view("resultado", ["mensagem" => "Usuário ou senha inválidos."]);
        }
    }
}