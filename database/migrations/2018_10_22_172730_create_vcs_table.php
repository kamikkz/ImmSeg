<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVcsTable extends Migration
{
    /**
     * Esta tabla aun tiene que ir super relacionada
     *
     * @Relacionar con todas las demas tablas excepto b1s
     */
    public function up()
    {
        Schema::create('vcs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('revisor');
            $table->string('turno');
            $table->string('jefe');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vcs');
    }
}
