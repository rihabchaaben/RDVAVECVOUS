<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Demandeur;

$factory->define(Demandeur::class, function (Faker $faker) {

    return [
        'nom' => $faker->name(),
        'adresse' => $faker->address(),
        'cp' => $faker->postcode(),
        'telephone' => $faker->phoneNumber(),
        'mobile' => $faker->phoneNumber(),
        'ref' => $faker->randomLetter(),
        'ville_id' => \App\Ville::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,

    ];
});
