<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemActualizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_actualizaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->required();
            $table->integer('actualizacion_id')->unsigned()->nullable();
            $table->integer('categoria_actualizacion_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('actualizacion_id')->references('id')->on('actualizaciones')
                ->onDelete('cascade');
            $table->foreign('categoria_actualizacion_id')->references('id')->on('categoria_actualizaciones')
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
        Schema::drop('item_actualizaciones');
    }
}
