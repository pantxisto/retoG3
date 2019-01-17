<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTituloGrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tituloGrados', function (Blueprint $table) {
            $table->integer('idGrado')->unsigned();
            $table->integer('idUsuario')->unsigned();
            $table->datetime('fecFinGrado');
            $table->timestamps();

            $table->foreign('idGrado')->references('idGrado')->on('grados');
            //$table->foreing('idGrado')->references('idGrado')->on('Grado')->onDelete('cascade');

            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios');
            //$table->foreing('idUsuario')->references('idUsuario')->on('Usuario')->onDelete('cascade');

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
        Schema::dropIfExists('tituloGrados');
    }
}
