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
        Schema::create('datos_academicos', function (Blueprint $table) {
            $table->increments('id_acade');
            $table->foreign('dato_general_id')->references('id')->on('datos_generales');
            $table->string('grado_acade');
            $table->binary('titulo');
            $table->binary('cedula');
            $table->string('estatus');
            $table->string('documentos_t');
            $table->string('documento_c');
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
        Schema::dropIfExists('datos_academicos');
    }
};