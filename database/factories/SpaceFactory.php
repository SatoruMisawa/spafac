<?php

use App\Facility;
use App\Space;
use App\User;
use Faker\Generator as Faker;

$factory->define(Space::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class)->create()->id,
        'facility_id' => factory(Facility::class)->create()->id,
		'key_delivery_id' => 1,
        'capacity' => $faker->randomDigitNotNull(),
        'floor_area' => $faker->randomDigitNotNull(),
    ];
});