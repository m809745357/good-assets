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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'headimgurl' => $faker->imageUrl(50, 50),
        'mobile' => '183678319' . rand(10, 99),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Project::class, function (Faker $faker) {
    static $password;

    return [
        'image' => $faker->imageUrl(380, 220),
        'title' => $faker->sentence,
        'desc' => $faker->paragraph,
        'money' => $faker->randomFloat(),
        'content' => $faker->text,
        'status' => rand(0, 1),
        'ico' => $faker->paragraph,
        'team' => $faker->paragraph,
        'issue' => $faker->paragraph
    ];
});

$factory->define(App\Models\Tiding::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'desc' => $faker->paragraph,
        'image' => $faker->imageUrl,
        'body' => $faker->text,
        'order' => 0,
    ];
});

$factory->define(App\Models\Property::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'image' => $faker->imageUrl,
        'order' => 0,
    ];
});
