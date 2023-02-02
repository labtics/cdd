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
        Schema::create('actualizacion_acade', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Evento');
            $table->string('nombre_even');
            $table->string('fecha_even');
            $table->string('institucion_a');
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
        Schema::dropIfExists('actualizacion_acade');
    }
};
