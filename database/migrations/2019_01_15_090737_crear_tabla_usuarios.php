<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email');
            $table->string('password');
            $table->binary('cv')->nullable($value = true);
            $table->integer('idDepart')->nullable($value = true);
            $table->string('nomDepart')->nullable($value = true);
            $table->integer('rol');
            $table->datetime('feAlta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
