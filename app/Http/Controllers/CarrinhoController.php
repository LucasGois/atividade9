<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class CarrinhoController extends Controller
{
    function lista(){
        // Verifica Sessao
        if (session()->has('usuario') == false){
            return redirect()->route('login');
        }

        return view('carrinho_lista', [
                'produtos' => session('carrinho')
            ]
        );        
    }

    function incluir($id){
        // Verifica Sessao
        if (session()->has('usuario') == false){
            return redirect()->route('login');
        }

        $carrinho = session('carrinho');
        $carrinho[] = Produto::find($id);
        session(['carrinho' => $carrinho]);

        return redirect()->route('carrinho_lista', [
                'produtos' => session('carrinho')
            ]
        );
    }
}
