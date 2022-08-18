<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NumeroCursos');
            $table->string('NombreCurso');
            $table->string('EstadoCurso');
            $table->string('TipoCurso');
            $table->unsignedBigInteger('id_municipio');
            $table->foreign('id_municicpio')->references('id')->on('municipio_cursos');
            $table->unsignedBigInteger('id_sector');
            $table->foreign('id_sector')->references('id')->on('sectors');
            $table->unsignedBigInteger('id_jornada');
            $table->foreign('id_jornada')->references('id')->on('jornadas');
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
        Schema::dropIfExists('cursos');
    }
}
