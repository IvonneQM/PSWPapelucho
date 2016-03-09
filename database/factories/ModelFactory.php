<?php

$factory->define(App\User::class, function ($faker){
    return[
        'rut' => $faker->randomNumber,
        'full_name' => $faker->name,
        'password' => bcrypt(srt_random(10)),
        'role' => $faker->randomElement(['apoderados','admin']),
    ];
});
