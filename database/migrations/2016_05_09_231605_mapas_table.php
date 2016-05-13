<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapas', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('zoom')->required();
            $table->double('latitud')->required();
            $table->double('longitud')->required();
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
        Schema::drop('mapas');
    }
}
