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
<<<<<<< HEAD

            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->unsignedBigInteger('estado_id');
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados');
            
=======
            $table->increments('id');
            $table->string('municipios');
            $table->timestamps();
>>>>>>> 8f94b5e10f6ee9762bfa98e93f603bc702e7cd1b
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
