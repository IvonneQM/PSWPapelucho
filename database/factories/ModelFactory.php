<?php

$factory->define(App\User::class, function ($faker){
    return[
        'rut' => $faker->unique->randomNumber,
        'full_name' => $faker->name,
        'password' => bcrypt(str_random(10)),
        'role' => $faker->randomElement(['apoderado','admin']),
    ];
});
