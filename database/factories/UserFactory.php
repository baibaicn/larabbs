<?php

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



$factory->define(User::class, function (Faker $faker) {
	$date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'remember_token' => Str::random(10),
        'email_verified_at' => now(),
        'password' => '$2y$10$ICjAXZbODrdOxaM.0RIeGuyc7UDLL6nFCeTLw/NW6aeyzBS4nyRUW', // password
        'introduction' => $faker->sentence(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
