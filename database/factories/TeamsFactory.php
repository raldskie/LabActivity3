<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teams;
use Faker\Generator as Faker;

$factory->define(Teams::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
