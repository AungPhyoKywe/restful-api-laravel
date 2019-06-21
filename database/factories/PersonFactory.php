<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        //

        "First_name"  => $faker->firstName,
        "Last_name"   => $faker->lastName,
        "phone"       => $faker->phoneNumber,
        "email"       => $faker->safeEmail,
        "city"        => $faker->city,
    ];
});
