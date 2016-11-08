<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

$factory->define(\App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('123456'),
        'gender' => $faker->boolean(),
        'birthDate' => $faker->date(),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Models\Address::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 100),
        'street' => $faker->address,
        'number' => $faker->numberBetween(1, 200),
        'zip' => $faker->postcode,
    ];
});
