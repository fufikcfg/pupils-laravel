<?php

use App\Models\Students;
use Faker\Generator as Faker;

$factory->define(Students::class, function (Faker $faker) {
    return [
        'SLastName' => $faker->lastName,
        'SFirstName' => $faker->firstName,
        'SMidName' => $faker->lastName,
        'classes_id' => rand(1,4),
        'SBirthDate' => $faker->date(),
    ];
});
