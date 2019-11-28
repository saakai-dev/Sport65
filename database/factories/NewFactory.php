<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\New;
use Faker\Generator as Faker;

$factory->define(New::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'contents' => $faker->text,
        'image' => $faker->word,
        'user_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
