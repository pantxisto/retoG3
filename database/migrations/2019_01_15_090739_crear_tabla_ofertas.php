<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOfertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('idOferta');
            $table->integer('idEmpresa')->unsigned();
            $table->string('tipoTrabajo');
            $table->string('sector');
            $table->string('ubicacion');
            $table->integer('minExpe');
            $table->double('salario');
            $table->datetime('fecSubido');
            $table->timestamps();

            $table->foreign('idEmpresa')->references('idEmpresa')->on('empresas');
            /*$table->foreign('idEmpresa')
                ->references('idEmpresa')->on('empresa')
                ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}
