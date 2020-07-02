<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'lawn' => $faker->boolean,
        'trees' => $faker->boolean,
        'rubble' => $faker->boolean,
        'comment' => $faker->text($maxNbChars = 200),
        'date' => $faker->dateTimeThisYear
    ];
});
