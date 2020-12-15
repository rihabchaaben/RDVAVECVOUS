<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Avis::class, function (Faker $faker) {
    return [
        'note' => $faker->numberBetween(1,9),
        'commentaire' => $faker->text(15),
        'demande_id' => \App\Demande::all()->random()->id,
        'professionnel_id' => \App\Professionnel::all()->random()->id
    ];
});
