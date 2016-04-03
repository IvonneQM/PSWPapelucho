<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JornadaNivelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornada_nivel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jornada_id')->unsigned()->nullable();
            $table->integer('nivel_id')->unsigned()->nullable();

            $table->foreign('jornada_id')->references('id')->on('jornadas')
                ->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('niveles')
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
        Schema::drop('jornada_nivel');
    }
}
