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
        Schema::create('estados', function (Blueprint $table) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c491ac522ee4d2d7457a8d5d547276b0579e8096
            
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('estados');
            $table->string('nombre');
            $table->string('abreviatura');
            $table->timestamps();

<<<<<<< HEAD
=======
            $table->increments('id');
            $table->string('Estados');
            $table->timestamps();
>>>>>>> 8f94b5e10f6ee9762bfa98e93f603bc702e7cd1b
=======
>>>>>>> c491ac522ee4d2d7457a8d5d547276b0579e8096
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
};
