<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'author_id' => $faker->numberBetween(1,100),
        'title' => $faker->sentence()
    ];
});
