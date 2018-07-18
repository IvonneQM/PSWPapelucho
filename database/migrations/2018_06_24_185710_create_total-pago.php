<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalPago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total-pago', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pago_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('pago_id')->references('id')->on('pago')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('total-pago');
    }
}
