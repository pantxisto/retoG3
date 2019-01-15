<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOfertaSolicitada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OfertaSolicitada', function (Blueprint $table) {
            $table->integer('idOferta')->unsigned();
            $table->integer('idUsuario')->unsigned();
            $table->datetime('fecSolicitud');

            $table->foreign('idOferta')->references('idOferta')->on('Oferta');
           // $table->foreing('idOferta')->references('idOferta')->on('Oferta')->onDelete('cascade');

            $table->foreign('idUsuario')->references('idUsuario')->on('Usuario');
            //$table->foreing('idUsuario')->references('idUsuario')->on('Usuario')->onDelete('cascade');

            $table->primary(['idUsuario', 'idOferta']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OfertaSolicitada');
    }
}
