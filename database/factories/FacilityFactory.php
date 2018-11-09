<?php

use App\Address;
use App\Facility;
use Faker\Generator as Faker;

$factory->define(Facility::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull(),
        'address_id' => factory(Address::class)->create()->id,
        'facility_kind_id' => $faker->randomDigitNotNull(),
        'name' => $faker->name(),
        'access' => $faker->sentence(),
        'tel' => $faker->phoneNumber(),
    ];
});