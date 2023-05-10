<?php

use App\Models\Students;
use Faker\Generator as Faker;

$factory->define(Students::class, function (Faker $faker) {
    return [
        'SLastName' => $faker->lastName,
        'SFirstName' => $faker->firstName,
        'SMidName' => $faker->name,
        'SClass' => rand(1, 11),
        'SBirthDate' => $faker->date()
    ];
});
