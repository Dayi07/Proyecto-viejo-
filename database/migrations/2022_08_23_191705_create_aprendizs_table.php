<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NombreAprendiz');
            $table->string('TipoDocumento');
            $table->integer('NumeroDocumento');
            $table->string('CorreoAprendiz');
            $table->string('GeneroAprendiz');
            $table->string('EstadoAprendiz');
            $table->integer('TelefonoAprendiz');
            $table->unsignedBigInteger('id_ficha');
            $table->foreign('id_ficha')->references('id')->on('fichas');

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
        Schema::dropIfExists('aprendizs');
    }
}
