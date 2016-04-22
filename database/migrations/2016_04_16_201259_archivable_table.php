<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArchivableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivables', function (Blueprint $table) {
            $table->integer('archivo_id');
            $table->integer('archivable_id');
            $table->string('archivable_type');
            $table->unique(['archivable_id','archivable_type','archivo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archivables');
    }
}
