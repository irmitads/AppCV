<?php

use Faker\Generator as Faker;
use App\Veterinario;

$factory->define(Veterinario::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->name, 
        'telefono' => $faker->randomNumber(8,false),
        'correo' => $faker->unique()->safeEmail,
        'password'=> bcrypt($faker->word),
        'isactive'=> 1

    ];
});
