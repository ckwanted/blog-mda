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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Ana Pérez',
        'email' => 'admin@demo.com',
        'password' => bcrypt('admin123'),
        'role_id' => 1,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence,
        'body' => $faker->paragraph,        
        'image' => 'photo.jpg',        
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'article_id' => 1,
        'username' => $faker->name,
        'body' => $faker->paragraph,        
    ];
});
