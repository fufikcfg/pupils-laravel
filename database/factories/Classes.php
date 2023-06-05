<?php

use App\Models\Classes;
use Faker\Generator as Faker;

$classLetters = ['А', 'Б', 'В', 'Г'];
shuffle($classLetters);

$factory->define(Classes::class, function (Faker $faker) use ($classLetters) {

})->state(Classes::class, 'class_a', function (Faker $faker) use ($classLetters) {
    return [
        'level_study' => 1,
        'classes_letter' => $classLetters[0],
    ];
})->state(Classes::class, 'class_b', function (Faker $faker) use ($classLetters) {
    return [
        'level_study' => 1,
        'classes_letter' => $classLetters[1],
    ];
})->state(Classes::class, 'class_c', function (Faker $faker) use ($classLetters) {
    return [
        'level_study' => 1,
        'classes_letter' => $classLetters[2],
    ];
})->state(Classes::class, 'class_d', function (Faker $faker) use ($classLetters) {
    return [
        'level_study' => 1,
        'classes_letter' => $classLetters[3],
    ];
});

