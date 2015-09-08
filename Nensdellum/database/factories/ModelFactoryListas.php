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




$factory->define(NensdeLlum\Listas::class, function ($faker) {
    return [
        'Titulo' => $faker->name,
        'Descripcion' => $faker->text,

        'Tipo' => $faker->randomElement(['Valores','Colaboradores']),


    ];
});
