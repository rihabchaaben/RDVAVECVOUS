<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Ville;

$factory->define(Ville::class, function (Faker $faker) {
    return [
        'nom' => $faker->city()
    ];
});
