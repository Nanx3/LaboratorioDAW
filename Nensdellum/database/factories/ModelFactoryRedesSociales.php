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



$factory->define(NensdeLlum\RedesSociales::class, function ($faker) {
    return [
        'Titulo' => $faker->name,

        'Glyph' => $faker->randomElement(['glyphicon glyphicon-inbox','glyphicon glyphicon-list-alt','glyphicon glyphicon-blackboard']),

        'URLPagina' => $faker->url,


    ];
});
