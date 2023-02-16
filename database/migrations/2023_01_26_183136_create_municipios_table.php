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
        Schema::create('municipios', function (Blueprint $table) {

            $table->engine = 'InnoDB';
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->string('municipios');
            $table->timestamps();
=======

            $table->bigIncrements('id');
            $table->unsignedBigInteger('estado_id');
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados');
>>>>>>> 6fcb8fbe11ebe8be6d98d547f96be61e1d0bea04
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
};
