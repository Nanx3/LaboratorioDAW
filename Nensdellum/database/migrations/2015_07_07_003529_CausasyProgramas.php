<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CausasyProgramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causasyprogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Texto');
            $table->enum('Tipo',['Causas','Programas']);
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
        Schema::drop('causasyprogramas');
    }
}
