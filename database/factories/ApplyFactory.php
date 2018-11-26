<?php

use App\Apply;
use App\Plan;
use App\User;
use Faker\Generator as Faker;

$factory->define(Apply::class, function (Faker $faker) {
    return [
        'guest_id' => factory(User::class)->create()->id,
        'host_id' => factory(User::class)->create()->id,
        'plan_id' => factory(Plan::class)->create()->id,
        'price' => $faker->numberBetween(1000, 99999),
    ];
});