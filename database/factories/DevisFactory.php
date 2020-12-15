<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Devis::class, function (Faker $faker) {
    return [
        'designation' => $faker->text(10),
        'quantite' => $faker->numberBetween(1, 5),
        'prix_unitaire' => $faker->numberBetween(1, 10),
        'montant' => $faker->numberBetween(1, 10),
        'proposition_id' => \App\Proposition::all()->random()->id,
        'professionnel_id' => \App\Professionnel::all()->random()->id,
        'status' => $faker->numberBetween(1, 4)

    ];
});
