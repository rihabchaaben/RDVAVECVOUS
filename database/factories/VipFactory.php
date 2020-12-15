<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\VipProfessionnel::class, function (Faker $faker) {
    return [
        'demandeur_id' => \App\Demandeur::all()->random()->id,
        'professionnel_id' => \App\Professionnel::all()->random()->id

    ];
});
