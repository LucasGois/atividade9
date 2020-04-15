<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class LoginController extends Controller
{
    function login(){
        return view("login");
    }

    function entrar(Request $req){
        $usuario = $req->input('usuario');
        $senha = $req->input('senha');
      
        $cliente = Cliente::where('usuario', '=', $usuario)->first();
  
        if ($cliente and $cliente->senha == $senha){

			$variavel = [
				"usuario" => $usuario,
                "nome" => $cliente->nome,
                "carrinho" => []
			];
			session($variavel);

            return redirect()->route('inicio');
        } else {
            return redirect()->route('login');
        }
    }

    function sair(){
		session()->forget(["usuario", "nome"]);
		
		return redirect()->route('login');
    }
}