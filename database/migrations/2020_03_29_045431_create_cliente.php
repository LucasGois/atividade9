<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome", 255);
            $table->string("senha", 255);
            $table->string("endereco", 200);
            $table->string("cep", 8);
            $table->string("cidade", 50);
            $table->unsignedBigInteger("id_estado");
            $table->timestamps();

            $table->foreign('id_estado')->references('id')->on('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
