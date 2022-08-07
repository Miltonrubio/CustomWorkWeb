<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estado;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' =>
            '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

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
    ];
});

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'usuario' => $faker->realText(rand(5, 40)),
        'telefono' => $faker->numberBetween(1, 15),
        'correo' => $this->faker->unique()->safeEmail(),
    ];
});
