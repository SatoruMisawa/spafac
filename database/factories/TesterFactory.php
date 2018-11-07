<?php

use App\Tester;
use Faker\Generator as Faker;

$factory->define(Tester::class, function (Faker $faker) {
    return [
        'name' => 'tester',
        'password' => Hash::make($faker->password()),
    ];
});