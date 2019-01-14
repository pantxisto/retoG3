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

            //$table->foreign('idOferta')->references('idOferta')->on('oferta');
            $table->foreing('idOferta')
                ->references('idOferta')->on('oferta')
                ->onDelete('cascade');

            //$table->foreign('idUsuario')->references('idUsuario')->on('usuario');
            $table->foreing('idUsuario')
                ->references('idUsuario')->on('usuario')
                ->onDelete('cascade');

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
