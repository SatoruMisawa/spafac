<?php

use App\StripeUser;
use Faker\Generator as Faker;

$factory->define(StripeUser::class, function (Faker $faker) {
    return [
        'claimant_customer_id' => str_random(30),
        'claimant_account_id' => str_random(30),
    ];
});