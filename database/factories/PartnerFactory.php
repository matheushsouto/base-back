<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Modules\Partner\Models\Partner;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Partner::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'cnpj' => $faker->paragraph,
        'email' => $faker->paragraph,
        'status' => $faker->paragraph,
        'quota_min' => $faker->paragraph,
        'quota_max' => $faker->paragraph,
    ];
});
