<?php

use App\Plan;
use App\Reservation;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'plan_id' => factory(Plan::class)->create()->id,
    ];
});