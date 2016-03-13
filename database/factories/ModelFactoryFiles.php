<?php

$factory->define(App\File::class, function ($faker){
    return[
        'id' => $faker->unique->randomNumber,
        'name' => $faker->name,
        'url' => $faker->imageUrl($width=170, $height=170,'nature'),
        'size' => $faker->randomDigit,
    ];

});
