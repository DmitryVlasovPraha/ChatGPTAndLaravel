<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Brand;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Brand::class, function (Faker $faker) {
    //$title = $faker->realText(rand(20, 50));
    return [
        'title' => [
            'Hellboy',
            'Harry Potter',
            'Captain Price',
            'Dead Space',
            'Pokemon',
            'Call of Duty',
            'FIFA 22',
            'Project Zomboid',
            'Sonic'
        ],
    ];
});
