<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\News;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
        'content' => $faker->text(300),
    ];
});
