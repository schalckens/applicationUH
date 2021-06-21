<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'address' => $faker->address,
        'address2' => $faker->secondaryAddress,
        'city' => $faker ->city,
        'zip_code' => $faker -> postcode
    ];
});


