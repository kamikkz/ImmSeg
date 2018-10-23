<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vc_id')->unsigned();
            $table->time('entrada');
            $table->timestamps();
            $table->foreign('vc_id')->references('id')->on('vcs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventras');
    }
}
