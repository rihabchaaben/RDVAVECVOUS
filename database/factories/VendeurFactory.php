<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Vendeur;

$factory->define(Vendeur::class, function (Faker $faker) {
    return [
        'nom' => $faker->name(),
        'zone' => $faker->address(),
        'cp' => $faker->postcode(),
        'mobile' => $faker->phoneNumber(),
        'code_promo' => $faker->randomNumber(),
        'ville_id' => \App\Ville::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
    ];
});
