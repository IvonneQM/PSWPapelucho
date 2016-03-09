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
            $table->string('jornada');
            $table->string('kindergarten');
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
        Schema::drop('parvulos');
    }
}
