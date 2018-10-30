<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicularControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicular_controls', function (Blueprint $table) {
            $table->increments('id');
            //Datos del vehiculo
            $table->string('chofer');
            $table->string('gafeteV');
            $table->string('tipo');
            $table->string('placa');
            //Tamitador
            $table->string('nombre');
            $table->string('gafeteT');
            //Carga
            $table->string('operador');
            $table->string('g_master');
            $table->integer('piezas');
            $table->integer('kilos');
            //Hora
            $table->dateTime('hr_entrada');
            $table->dateTime('hr_salida')->nullable();
            //Datos guardia
            $table->string('revisor');
            $table->string('turno');
            $table->string('jefe');
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
        Schema::dropIfExists('vehicular_controls');
    }
}
