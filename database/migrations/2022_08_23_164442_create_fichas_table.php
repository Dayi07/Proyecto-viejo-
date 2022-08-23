<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('IdUnicoFicha');
            $table->date('FechaInicio');
            $table->date('FechaTerminacion');
            $table->string('EtapaFicha');
            $table->string('NombreResponsable');
            $table->unsignedBigInteger('id_centro');
            $table->foreign('id_centro')->references('id')->on('centros');
            $table->unsignedBigInteger('id_jornada');
            $table->foreign('id_jornada')->references('id')->on('jornadas');
            $table->unsignedBigInteger('id_programa_formacion');
            $table->foreign('id_programa_formacion')->references('id')->on('programa_formacions');
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
        Schema::dropIfExists('fichas');
    }
}
