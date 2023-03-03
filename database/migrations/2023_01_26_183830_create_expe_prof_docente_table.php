<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expe_prof_docente', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('dato_general_id')->references('id')->on('datos_generales');
            $table->string('programa_edu');
            $table->string('id_asignatura');
            $table->string('id_asignatura_g');
            $table->string('Ciclo_esc');
            $table->binary('Recoocimiento');
            $table->string('cuaerpo_aca');
            $table->string('Grupo_aca');
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
        Schema::dropIfExists('expe_prof_docente');
    }
};
