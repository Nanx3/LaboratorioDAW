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




$factory->define(NensdeLlum\Mensajes::class, function ($faker) {
    return [

        'Texto' => $faker->text,

        'Tipo' => $faker->unique()->randomElement(['Causas','QuienesSomos','Bienvenidos','Donadores','Voluntariado','Valores','DifundiryAsistir','ComoAyudar','Mision','Vision','Programas','PerfilPacientes','Filosofia','Evolucion','Efectivo']),


    ];
});
