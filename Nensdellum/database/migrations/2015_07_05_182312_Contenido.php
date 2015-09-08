<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contenido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('Titulo');
            $table->mediumText('Descripcion');
            $table->text('URLImagen');
            $table->enum('Tipo',['Testimonios','Imagenes','Logros','Donadores','Notificaciones','Evolucion','Videos','Boletin','Imagen1','Imagen2','Imagen3']);
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
        Schema::drop('contenido');
    }
}
