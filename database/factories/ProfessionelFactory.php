<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Professionnel;

$factory->define(Professionnel::class, function (Faker $faker) {
    return [
        'nom' => $faker->name(),
        'adresse' => $faker->address(),
        'cp' => $faker->postcode(),
        'telephone' => $faker->phoneNumber(),
        'mobile' => $faker->phoneNumber(),
        'site' => $faker->url(),
        'description' => $faker->text(100),
        'avatar' => $faker->imageUrl('15','15','cats'),
        'ville_id' => \App\Ville::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
    ];
});
