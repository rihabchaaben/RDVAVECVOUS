<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Document;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'nom' => $faker->text(8) ,
        'extension' => $faker->fileExtension() ,
        'type' => $faker->text(5) ,
        'url' => $faker->imageUrl() ,
        'user_id' => \App\User::all()->random()->id
    ];
});
