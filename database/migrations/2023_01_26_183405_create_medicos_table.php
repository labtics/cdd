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
        Schema::create('medicos', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nss');
            $table->string('alergias');
            $table->string('patologias');
            $table->string('tipo_sangre');
            $table->string('nombre_contacto_emergencia');
            $table->string('telefono');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicos');
    }
};
