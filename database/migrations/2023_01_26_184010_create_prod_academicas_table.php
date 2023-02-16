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
        Schema::create('prod_academicas', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('Evento_p');
            $table->string('Nombre_eventoP');
            $table->string('Fecha_eventoP');
            $table->date('Fecha_evento');
            $table->string('institucion');
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
        Schema::dropIfExists('prod_academicas');
    }
};
