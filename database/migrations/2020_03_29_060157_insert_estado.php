<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Estado;

class InsertEstado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $estado = new Estado();
        $estado->nome = "Santa Catarina";
        $estado->sigla = "SC";
        $estado->save();

        $estado = new Estado();
        $estado->nome = "Rio Grande do Sul";
        $estado->sigla = "RS";
        $estado->save();

        $estado = new Estado();
        $estado->nome = "Paraná";
        $estado->sigla = "PR";
        $estado->save();
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
