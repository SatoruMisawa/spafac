<?php

use App\Plan;
use App\Space;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) {
    return [
        'space_id' => factory(Space::class)->create()->id,
        'preorder_deadline_id' => 1,
        'preorder_period_id' => 1,
        'name' => $faker->name(),
        'price_per_hour' => $faker->numberBetween(0, 9999),
        'price_per_day' => $faker->numberBetween(0, 99999),
        'need_to_be_approved' => $faker->boolean(),
        'from' => $faker->date(),
        'to' => $faker->date(),
    ];
});