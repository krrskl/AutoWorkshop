<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'names' => $faker->firstName,
        'lastnames' => $faker->lastName,
        'birthday' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'gender' => $faker->randomElement(['Masculino', 'Femenino']),
        'address' => $faker->address,
        'photo' => 'https://placeimg.com/640/480/people/'
    ];
});
