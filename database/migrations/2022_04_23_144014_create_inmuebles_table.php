<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{

    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();

            $table->string('tipo_inmueble')->nullable();
            $table->text('direccion')->nullable();
            $table->integer('precio')->nullable();
            $table->integer('numero_habitacion')->nullable();
            $table->integer('numero_bano')->nullable();
            $table->integer('numero_area')->nullable();
            $table->integer('codigo')->nullable();
            $table->string('foto')->nullable();
            $table->string('estatus')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('inmuebles');
    }
}
