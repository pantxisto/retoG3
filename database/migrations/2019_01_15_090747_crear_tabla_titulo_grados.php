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
            $table->unsignedInteger('idGrado');
            $table->foreign('idGrado')->references('idGrado')->on('grados');
            $table->unsignedInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->datetime('fecFinGrado');
            $table->timestamps();
            $table->primary(['idGrado', 'idUsuario']);
            //$table->foreing('idGrado')->references('idGrado')->on('Grado')->onDelete('cascade');
            //$table->foreing('idUsuario')->references('idUsuario')->on('Usuario')->onDelete('cascade');

            
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
