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
        Schema::create('datos_medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No.S.S');
            $table->string('Alergias');
            $table->string('Patologias');
            $table->string('Tipo_sangre');
            $table->string('Contacto_eme');
            $table->string('No.Telefono');
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
        Schema::dropIfExists('datos_medicos');
    }
};
