<?php

use App\Apply;
use App\Plan;
use App\StripeUser;
use App\User;
use Faker\Generator as Faker;

$factory->define(Apply::class, function (Faker $faker) {
    $plan = factory(Plan::class)->create();
    $guest = factory(User::class)->create();
    $guest->claimantUser()->save(factory(StripeUser::class)->make());
    $host = $plan->planner();
    $host->claimantUser()->save(factory(StripeUser::class)->make());
    return [
        'guest_id' => $guest,
        'host_id' => $host,
        'plan_id' => $plan->id,
        'price' => $faker->numberBetween(1000, 99999),
    ];
});