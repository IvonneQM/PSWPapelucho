<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParvulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parvulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('full_name');
            $table->string('level');

            $table->string('kindergarten');
            $table->integer('user_id')->unsigned();
            $table->integer('jornada_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('jornada_id')->references('id')->on('jornadas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parvulos');
    }
}
