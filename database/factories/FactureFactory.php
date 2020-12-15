<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Facture;

$factory->define(Facture::class, function (Faker $faker) {
    return [
        'montant' => $faker->numberBetween(10, 500),
        'quantite' => $faker->numberBetween(1, 5),
        'note' => $faker->text(100),
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'demande_id' => \App\Demande::all()->random()->id,
        'professionnel_id' => \App\Professionnel::all()->random()->id
    ];
});
