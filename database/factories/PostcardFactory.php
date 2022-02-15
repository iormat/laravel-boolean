<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postcard;
use Faker\Generator as Faker;

$factory -> define(Postcard::class, function (Faker $faker) {
    return [
        'sender' => $faker -> name(),
        'address' => $faker ->streetAddress(),
        'text' => $faker ->sentence(15, false),
    ];
});
