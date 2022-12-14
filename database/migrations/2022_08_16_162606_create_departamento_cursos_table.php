<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentoCursosTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamento_cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NombreDepartamentoCurso');
            $table->unsignedBigInteger('id_pais');
            $table->foreign('id_pais')->references('id')->on('pais_cursos');
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
        Schema::dropIfExists('departamento_cursos');
    }
}
