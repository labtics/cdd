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
        Schema::create('datos_otra_depen', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dato_general_id');
            $table->string('nombre_depen');
            $table->string('direccion_depen');
            $table->string('horarios');
            $table->string('dias_laborales');
            $table->string('nombre_jefe');
            $table->string('telefono_depen');
            $table->timestamps();
            $table->foreign('dato_general_id')->references('id')->on('datos_generales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_otra_depen');
    }
};
