<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Categorie;

$factory->define(Categorie::class, function (Faker $faker) {
    $parentId = collect([1,2,null])->random();
    return [
        'label' => $faker->text(7),
        'code' => $faker->text(5),
        'parent_id' => $parentId
    ];
});
