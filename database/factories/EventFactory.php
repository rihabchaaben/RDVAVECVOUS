<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
        'start_date' => $faker->date,
        'end_date'   => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'demande_id' => \App\Demande::all()->random()->id,
    ];
});
