<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    $title = $faker->realText(rand(10, 20));
    return [
        'title' => $title
    ];
});
