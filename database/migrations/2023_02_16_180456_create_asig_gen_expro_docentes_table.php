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
        Schema::create('asig_gen_expro_docentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('asignatura_general_id');
            $table->unsignedBigInteger('expro_docentes_id');
            $table->timestamps();

            $table->foreign('asignatura_general_id')->references('id')->on('asignaturas_generales')->onDelete('cascade');
            $table->foreign('expro_docentes_id')->references('id')->on('expro_docentes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asig_gen_expro_docentes');
    }
};
