<?php

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'prefecture_id' => $faker->randomDigitNotNull(),
		'zip' => $faker->postcode(),
		'address1' => $faker->city(),
		'address1_ruby' => $faker->city(),
		'address2' => $faker->streetAddress(),
		'address2_ruby' => $faker->streetAddress(),
		'address3' => $faker->buildingNumber(),
		'address3_ruby' => $faker->buildingNumber(),
		'latitude' => $faker->latitude,
		'longitude' => $faker->longitude,
    ];
});