<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Priority;
use Faker\Generator as Faker;

$factory->define(Priority::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'color' => $faker->hexcolor,
    ];
});
