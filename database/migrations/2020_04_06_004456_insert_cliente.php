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
        $cliente->nome = "admin";
        $cliente->senha = "admin";
        $cliente->endereco = "endereco";
        $cliente->cep = "89500000";
        $cliente->cidade = "Caçador";
        $cliente->Estado = Estado::where('id', '=', 1)->first();;
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
