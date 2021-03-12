<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->text('modelo');
            $table->text('color');
            $table->text('patente');
            $table->integer('año');
            $table->integer('coste');
            $table->integer('vecesArrendado');
            $table->boolean('disponible');

            $table->unsignedBigInteger('id_sucursales')->nullable();
            $table->foreign('id_sucursales')->references('id')->on('sucursales');
    
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
        Schema::dropIfExists('vehiculos');
    }
}
