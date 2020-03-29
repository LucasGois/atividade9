<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Estado;

class ClienteController extends Controller
{
    function cadastro(){
        return view("cliente_cadastro", [
            "estados" => Estado::all()
        ]);
    }

    function lista(){
        $clientes = Cliente::all();

        foreach($clientes as $cliente){
            $estado = Estado::where('id', '=', $cliente->estado_id)->first();

            $cliente->estado = $estado->nome;
        }
        
        return view("cliente_lista", [
            "clientes" => $clientes
        ]);
    }

    function cadastrar(Request $req){
        $cliente = new Cliente();
        $cliente->nome = $req->input('nome');
        $cliente->endereco = $req->input('endereco');
        $cliente->cep = $req->input('cep');
        $cliente->cidade = $req->input('cidade');
        $cliente->estado_id = $req->input('estado');

        $cliente->save();

        return redirect()->route('lista_cliente');
    }
}
