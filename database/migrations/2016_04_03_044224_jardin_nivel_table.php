<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JardinNivelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jardin_nivel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jardin_id')->unsigned()->nullable();
            $table->integer('nivel_id')->unsigned()->nullable();

            $table->foreign('jardin_id')->references('id')->on('jardines')
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
        Schema::drop('jardin_nivel');
    }
}
