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
        Schema::create('eventos', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
<<<<<<< HEAD
            $table->string('nombre_evento');
=======
            $table->string('nombre');
>>>>>>> 6fcb8fbe11ebe8be6d98d547f96be61e1d0bea04
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
        Schema::dropIfExists('eventos');
    }
};
