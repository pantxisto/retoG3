<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Empresa', function (Blueprint $table) {
            $table->increments('idEmpresa');
            $table->string('nomEmpresa');
            $table->string('sector');
            $table->string('ubicacion');
            $table->string('email');
            $table->string('telefono');
            $table->string('link');
            $table->timestamps('fecAlta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Empresa');
    }
}
