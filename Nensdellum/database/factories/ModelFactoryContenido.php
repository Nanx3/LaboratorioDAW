<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/**
 * The attributes that are mass assignable.
 *
 * @var array
 *$table->mediumText('Titulo');
 *  $table->mediumText('Descripcion');
$table->text('URLImagen');
$table->enum('Tipo',['Donadores,Notificaciones,Logros,Evoluciones,Galeria,Video,Boletin']);
$table->timestamps();



 */



$factory->define(NensdeLlum\Contenido::class, function ($faker) {
    return [
        'Titulo' => $faker->name,
        'Descripcion' => $faker->text,
        'URLImagen' => $faker->url,
        'Tipo' => $faker->randomElement(['Imagenes','Logros','Donadores','Notificaciones','Evolucion','Videos','Boletin']),
    ];
});
