<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GaleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name')->required();
            $table->string('publish')->required();
            $table->integer('jardin_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('jardin_id')->references('id')->on('jardines')
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
        Schema::drop('galerias');
    }
}
