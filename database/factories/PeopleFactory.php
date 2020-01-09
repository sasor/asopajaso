<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\People;
use Faker\Generator as Faker;

$factory->define(People::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'twitter' => '@'.$faker->userName
    ];
});
