<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customers;
use App\User;
use Faker\Generator as Faker;

$factory->define(Customers::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'name' => $faker->name,
        'active' => random_int(0,1)
    ];
});
