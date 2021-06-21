<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Civilstate;
use App\Models\User;
use App\Models\Nationality;
use Faker\Generator as Faker;

$factory->define(Civilstate::class, function (Faker $faker) {
    return [
        
        'user_id'=> function() {
            return factory(User::class)->create()->id;
        },
        'gender'=> $faker->randomDigit,
        'name'=> $faker->word,
        'birthname'=> $faker->word,
        'firstname'=> $faker->word,
        'firstname2'=> $faker->word,
        'firstname3'=> $faker->word,
        'birthdate'=> '2015-05-26',
        'birthplace'=> $faker->city,
        'nationality_id'=> function() {
            return factory(Nationality::class)->create()->id;
        },
        'created_at' =>now()
            
    ];
});
