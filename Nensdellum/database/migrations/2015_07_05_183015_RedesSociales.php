<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RedesSociales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redessociales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titulo',255);
            $table->string('Glyph',255);
            $table->string('URLPagina',255);
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
        Schema::drop('redessociales');
    }
}
