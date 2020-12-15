<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Message::class, function (Faker $faker) {
    return [
        'message' => $faker->text(40),
        'proposition_id' => \App\Proposition::all()->random()->id,
        'readed_at' => $faker->dateTime(),
        'from_id' => \App\User::all()->random()->id,
        'to_id' => \App\User::all()->random()->id
    ];
});
