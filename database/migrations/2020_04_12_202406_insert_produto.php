<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Produto;

class InsertProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $produto = new Produto();
        $produto->descricao = "CyberPunk 2077";
        $produto->preco = 199.90;
        $produto->save();

        $produto = new Produto();
        $produto->descricao = "Skyrim";
        $produto->preco = 169.90;
        $produto->save();
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
