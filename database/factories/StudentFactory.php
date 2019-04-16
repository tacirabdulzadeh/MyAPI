<?php

use Faker\Generator as Faker;


$factory->define(App\Student::class, function (Faker $faker) {

    return [
        'name'=>$faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
    ];

});