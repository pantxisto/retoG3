<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTituloGrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TituloGrado', function (Blueprint $table) {
            $table->integer('idGrado');
            $table->integer('idUsuario');
            $table->datetime('fecFinGrado');

            $table->primary(['idGrado', 'idUsuario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TituloGrado');
    }
}
