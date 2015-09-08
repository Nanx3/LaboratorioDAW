<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Listas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titulo',255);
            $table->mediumText('Descripcion');
            $table->enum('Tipo',['Valores','Colaboradores']);


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
        Schema::drop('listas');
    }
}
