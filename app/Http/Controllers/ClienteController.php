<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Estado;

class ClienteController extends Controller
{
    function lista(){
        $clientes = Cliente::all();
        
        return view("cliente_lista", [
                "clientes" => $clientes
            ]
        );
    }

    function cadastro($codigo){
        
        if ($codigo > 0){
            $cliente = Cliente::find($codigo);
        } else {
            $cliente = new Cliente();
        }

        return view("cliente_cadastro", [
                "id" => $codigo,
                "cliente" => $cliente,
                "estados" => Estado::all()
            ]
        );
    }

    function salvar(Request $req, $id){

        if ($id > 0){
            $cliente = Cliente::find($id);
        } else {
            $cliente = new Cliente();
        }

        $cliente->usuario = $req->input('usuario');
        $cliente->senha = $req->input('senha');
        $cliente->nome = $req->input('nome');
        $cliente->endereco = $req->input('endereco');
        $cliente->cep = $req->input('cep');
        $cliente->cidade = $req->input('cidade');
        $cliente->id_estado = $req->input('estado');

        $cliente->save();
        return redirect()->route('cliente_lista');
    }

    function excluir($id){
        
        if ($id > 0){
            $cliente = Cliente::find($id);
        }
        $cliente->delete();

        return redirect()->route('cliente_lista');
    }
}
