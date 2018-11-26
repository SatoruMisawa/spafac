<?php

use App\Apply;
use App\Plan;
use App\User;
use Faker\Generator as Faker;

$factory->define(Apply::class, function (Faker $faker) {
    $plan = factory(Plan::class)->create();
    return [
        'guest_id' => factory(User::class)->create()->id,
        'host_id' => $plan->planner()->id,
        'plan_id' => $plan->id,
        'price' => $faker->numberBetween(1000, 99999),
    ];
});