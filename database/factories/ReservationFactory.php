<?php

use App\Apply;
use App\Reservation;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    $host = factory(User::class)->create();
    $host->claimantUser()->create([
        'claimant_account_id' => str_random(30),
    ]);
    $guest = factory(User::class)->create();
    $guest->claimantUser()->create([
        'claimant_customer_id' => str_random(30),
    ]);
    return [
        'host_id' => $host->id,
        'guest_id' => $guest->id,
        'apply_id' => factory(Apply::class)->create()->id,
    ];
});