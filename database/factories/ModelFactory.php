<?php

$factory->define(App\User::class, function ($faker){
    return[
        'rut' => $faker->unique->randomNumber,
        'full_name' => $faker->name,
        'password' => bcrypt(str_random(10)),
        'email' => $faker->email,
        'role' => $faker->randomElement(['apoderado','admin']),
    ];
});

$factory->define(App\Noticia::class, function ($faker){
    return[
        'title' => $faker->text($maxNbChars = 20)  ,
        'content' => $faker->text($maxNbChars = 200) ,
        'publish' => $faker->text($maxNbChars = 10) ,
    ];
});
