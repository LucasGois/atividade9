<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    function lista(){

        // Verifica Sessao
        if (session()->has('usuario') == false){
            return redirect()->route('login');
        }

        $produtos = Produto::all();
        
        return view("produto_lista", [
                "produtos" => $produtos
            ]
        );
    }
}
