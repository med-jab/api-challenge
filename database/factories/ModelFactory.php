<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
    ];
});

$factory->define(App\Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'description' => $faker->text(255),
        'distance' => $faker->numberBetween(100, 1000),
        'image' => $faker->image(public_path('images/shops'),640, 480, null, false),
        //'image' => $faker->imageUrl(640, 480),
    ];
});