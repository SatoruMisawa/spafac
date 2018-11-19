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
        'name' => $this->faker->name(),
        'about' => $this->faker->sentence(),
        'capacity' => $faker->randomDigitNotNull(),
        'floor_area' => $faker->randomDigitNotNull(),
        'about_amenity' => $this->faker->sentence(),
        'about_food_drink' => $this->faker->sentence(),
        'about_cleanup' => $this->faker->sentence(),
        'cancellation_policy' => $this->faker->sentence(),
        'terms_of_use' => $this->faker->sentence(),
    ];
});