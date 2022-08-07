<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'usuario' => $faker->realText(rand(5, 40)),
        'telefono' => $faker->numberBetween(1, 15),
        'correo' => $this->faker->unique()->safeEmail(),
    ];
});
