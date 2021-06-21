<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lawyer;
use App\Models\Contact;
use App\Models\Civilstate;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Lawyer::class, function (Faker $faker) {
    return [
        'contact_id' => function() {
            return factory(Contact::class)->create()->id;
        },
        'civilstate_id' => function() {
            return factory(Civilstate::class)->create()->id;
        },
        'barreau' => $faker->word,
        'user_id' => function() {
            return factory(User::class)->create()->id;
        }
    ];
});
