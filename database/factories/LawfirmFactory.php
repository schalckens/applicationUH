<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lawfirm;
use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Lawfirm::class, function (Faker $faker) {
    return [
        'contact_id' => function() {
            return factory(Contact::class)->create()->id;
        }
    ];
});
