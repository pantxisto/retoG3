<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOferta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Oferta', function (Blueprint $table) {
            $table->increments('idOferta');
            $table->integer('idEmpresa')->unsigned();
            $table->string('tipoTrabajo');
            $table->string('sector');
            $table->string('ubicacion');
            $table->integer('minExpe');
            $table->double('salario');
            $table->timestamps('fecSubido');

            //$table->foreign('idEmpresa')->references('idEmpresa')->on('empresa');
            $table->foreing('idEmpresa')
                ->references('idEmpresa')->on('empresa')
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
        Schema::dropIfExists('Oferta');
    }
}
