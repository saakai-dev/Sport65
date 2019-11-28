<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MultiMedia;
use Faker\Generator as Faker;

$factory->define(MultiMedia::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'video' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
