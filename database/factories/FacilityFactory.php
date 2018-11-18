<?php

use App\Address;
use App\Facility;
use App\User;
use Faker\Generator as Faker;

$factory->define(Facility::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'address_id' => factory(Address::class)->create()->id,
        'facility_kind_id' => $faker->randomDigitNotNull(),
        'name' => $faker->name(),
        'access' => $faker->sentence(),
        'tel' => $faker->phoneNumber(),
    ];
});