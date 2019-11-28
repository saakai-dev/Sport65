<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Point;
use Faker\Generator as Faker;

$factory->define(Point::class, function (Faker $faker) {

    return [
        'team' => $faker->word,
        'logo' => $faker->word,
        'point' => $faker->word,
        'win' => $faker->word,
        'lose' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
