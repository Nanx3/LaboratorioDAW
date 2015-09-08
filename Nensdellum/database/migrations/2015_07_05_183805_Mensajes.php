<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('Texto');
            $table->enum('Tipo',['QuienesSomos','Bienvenidos','Donadores','Voluntariado','Valores','DifundiryAsistir','ComoAyudar','Mision','Vision','Programas','PerfilPacientes','Filosofia','Evolucion','Efectivo','Causas','Programas2']);
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
        Schema::drop('mensajes');
    }
}
