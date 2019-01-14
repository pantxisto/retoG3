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
            $table->integer('idAlumno')->unsigned();
            $table->timestamps('fecSolicitud');

            //$table->foreign('idOferta')->references('idOferta')->on('oferta');
            $table->foreing('idOferta')
                ->references('idOferta')->on('oferta')
                ->onDelete('cascade');

            //$table->foreign('idAlumno')->references('idAlumno')->on('alumno');
            $table->foreing('idAlumno')
                ->references('idAlumno')->on('alumno')
                ->onDelete('cascade');
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
