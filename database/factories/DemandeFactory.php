<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Demande;

$factory->define(Demande::class, function (Faker $faker) {
    return [
        'nom' => $faker->name(),
        'adresse' => $faker->address(),
        'cp' => $faker->postcode(),
        'description' => $faker->text(50),
        'fichier' => $faker->imageUrl(),
        'status' => $faker->numberBetween(1, 4),
        'ville_id' => \App\Ville::all()->random()->id,
        'categorie_id' => \App\Categorie::all()->random()->id,
        'demandeur_id' => \App\Demandeur::all()->random()->id
    ];
});
