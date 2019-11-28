<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MatchFuture;
use Faker\Generator as Faker;

$factory->define(MatchFuture::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'team_one' => $faker->word,
        'team_two' => $faker->word,
        'image_one' => $faker->word,
        'image_two' => $faker->word,
        'match_date' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
