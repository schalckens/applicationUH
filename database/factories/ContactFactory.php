<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use App\Models\User;
use App\Models\Address;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'address_id' => function() {
            return factory(Address::class)->create()->id;
        },
        'phone' => $faker->phoneNumber,
        'email' => $faker->email
    ];
});
