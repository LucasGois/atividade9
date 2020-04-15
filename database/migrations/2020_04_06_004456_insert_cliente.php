<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Cliente;
use App\Estado;

class InsertCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cliente = new Cliente();
        $cliente->usuario = "admin";
        $cliente->senha = "admin";
        $cliente->nome = "admin";
        $cliente->endereco = "endereco";
        $cliente->cep = "89500000";
        $cliente->cidade = "Caçador";
        $cliente->id_estado = 1;
        $cliente->save();

        $cliente = new Cliente();
        $cliente->usuario = "lucas";
        $cliente->senha = "123";
        $cliente->nome = "Lucas";
        $cliente->endereco = "endereco";
        $cliente->cep = "89500000";
        $cliente->cidade = "Caçador";
        $cliente->id_estado = 1;
        $cliente->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
