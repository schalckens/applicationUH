<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Nationality;
use Faker\Generator as Faker;

$factory->define(Nationality::class, function (Faker $faker) {
    return [
        'name' => $faker->country
    ];
});