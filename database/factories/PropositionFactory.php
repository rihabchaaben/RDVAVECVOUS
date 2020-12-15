<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Proposition::class, function (Faker $faker) {
    return [
        'status'=> $faker->numberBetween(1,3),
        'demande_id' => \App\Demande::all()->random()->id,
        'professionnel_id' => \App\Professionnel::all()->random()->id
    ];
});
