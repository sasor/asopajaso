<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'article_id' => $faker->numberBetween(1,200),
        'author_id' => $faker->numberBetween(1,100),
        'body' => $faker->text()
    ];
});
