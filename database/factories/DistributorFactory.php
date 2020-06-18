<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use App\Distributor;
use Faker\Generator as Faker;

$factory->define(Distributor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email
    ];
});
