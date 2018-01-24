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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Articles::class, function (Faker\Generator $faker) {

    return [
        \App\Models\Articles::TITLE => implode("", $faker->words(6)),
        \App\Models\Articles::SLUG => $faker->unique()->slug(5),
        \App\Models\Articles::CONTENT => implode("", $faker->paragraphs(5)),
    ];
});
