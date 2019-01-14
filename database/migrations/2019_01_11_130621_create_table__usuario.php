<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email');
            $table->string('password');
            $table->binary('cv');
            $table->int('idDepart');
            $table->string('nomDepart');
            $table->int('rol');
            $table->datetime('feAlta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
