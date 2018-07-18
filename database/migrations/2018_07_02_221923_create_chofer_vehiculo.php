<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoferVehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choferVehiculo', function (Blueprint $table) {

        $table->integer('user_id')->unsigned()->nullable();
        $table->integer('vehiculo_id')->unsigned()->nullable();

        $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
        $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->ondelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('choferVehiculo');

    }
}
