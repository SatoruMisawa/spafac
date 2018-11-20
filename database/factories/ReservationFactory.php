<?php

use App\Apply;
use App\Reservation;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'host_id' => factory(User::class)->create()->id,
        'guest_id' => factory(User::class)->create()->id,
        'apply_id' => factory(Apply::class)->create()->id,
    ];
});