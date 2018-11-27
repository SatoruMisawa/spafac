<?php

use App\Option;
use App\Plan;
use Faker\Generator as Faker;

$factory->define(Option::class, function (Faker $faker) {
    return [
        'plan_id' => factory(Plan::class)->create()->id,
        'name' => $faker->name(),
        'description' => $faker->sentence(),
        'price' => $faker->numberBetween(1000, 9999),
    ];
});