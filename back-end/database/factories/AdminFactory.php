<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AdminTbl;
use Faker\Generator as Faker;

$factory->define(AdminTbl::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'email'  => $faker->unique()->safeEmail,
        'login_id'  => $faker->name,
        'country'  => $faker->country,
        'password'  => bcrypt(123456789),
        'gender'  => rand(0,1),
        'api_token'  => \str_random(60),
    ];
});
