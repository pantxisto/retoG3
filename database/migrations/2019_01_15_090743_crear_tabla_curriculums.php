<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCurriculums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->increments('idCV');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idGrado')->unsigned();
            $table->string('idiomas');
            $table->binary('carnet');
            $table->string('minExpe');
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('users');
            //$table->foreing('idUsuario')->references('idUsuario')->on('Usuario')->onDelete('cascade');

            $table->foreign('idGrado')->references('idGrado')->on('grados');
            //$table->foreing('idGrado')->references('idGrado')->on('Grado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculums');
    }
}
