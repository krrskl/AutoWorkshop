<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'names' => $faker->firstName . $faker->name,
        'lastnames' => $faker->lastName,
        'birthday' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'gender' => $faker->randomElement(['Masculino', 'Femenino']),
        'address' => $faker->address
    ];
});
