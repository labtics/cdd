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
        Schema::create('datos_domiciliares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nacionalidad');
            $table->integer('id_estado');
            $table->integer('id_municipio');
            $table->string('calle');
            $table->string('colonia');
            $table->integer('codigo_P');
            $table->string('num_ex_in');
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
        Schema::dropIfExists('datos_domiciliares');
    }
};
