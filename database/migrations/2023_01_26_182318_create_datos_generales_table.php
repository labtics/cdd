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
        Schema::create('datos_generales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No.empleado');
            $table->string('nombre');
            $table->string('Apellido_P');
            $table->string('Apellido_M');
            $table->interger('sexo');
            $table->date('fecha_N');
            $table->integer('edad');
            $table->string('telefono');
            $table->string('telefono2');
            $table->string('estado_civil');
            $table->integer('id_categoria');
            $table->string('RFC')->unique();;
            $table->string('CURP')->unique();;
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
        Schema::dropIfExists('datos_generales');
    }
};
