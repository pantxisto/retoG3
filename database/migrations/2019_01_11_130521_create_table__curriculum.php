<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCurriculum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Curriculum', function (Blueprint $table) {
            $table->increments('idCV');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idGrado')->unsigned();
            $table->string('idiomas');
            $table->binary('carnet');
            $table->string('minExpe');

            //$table->foreign('idAlumno')->references('idAlumno')->on('alumno');
            $table->foreing('idUsuario')
                ->references('idUsuario')->on('usuario')
                ->onDelete('cascade');

            $table->foreing('idGrado')
                ->references('idGrado')->on('grado')
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
        Schema::dropIfExists('Curriculum');
    }
}
