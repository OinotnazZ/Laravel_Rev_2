<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'birth_date' =>$faker-> date(),
        'wallet_money' =>$faker->numberBetween(500, 1500000),
        'country_id' => rand(1,241)
    ];
});
