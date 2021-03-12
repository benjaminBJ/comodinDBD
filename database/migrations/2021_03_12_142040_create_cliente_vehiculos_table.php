<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_vehiculos', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_vehiculo')->nullable();
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');

            $table->unsignedBigInteger('id_clientes')->nullable();
            $table->foreign('id_clientes')->references('id')->on('clientes');
            
            $table->boolean('delete');
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
        Schema::dropIfExists('cliente_vehiculos');
    }
}
