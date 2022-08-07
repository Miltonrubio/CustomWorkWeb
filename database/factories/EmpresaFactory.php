<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'titulo' => $faker->realText(rand(5, 40)),
        'empresa' => $faker->realText(rand(5, 40)),
        'paga' => $faker->numberBetween(1, 15),
        'vacante' => $faker->numberBetween(1, 3),
        'descripcion' => $faker->realText(rand(5, 300)),
        'descripcion1' => $faker->realText(rand(5, 300)),
        'descripcion2' => $faker->realText(rand(5, 300)),
        'descripcion3' => $faker->realText(rand(5, 300)),
        'descripcion4' => $faker->realText(rand(5, 300)),
        'usuario' => $faker->realText(rand(5, 300)),
    ];
});
