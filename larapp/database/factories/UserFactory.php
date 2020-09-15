<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Faker\Provider\it_IT\Person as FakePerson;

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

$factory->define(User::class, function (Faker $faker) {
    $faker->addProvider(new FakePerson($faker));
    $birthdate = $faker->dateTimeBetween(
        $startDate = '1960-01-01',
        $endDate = '1999-12-31'
    )->format("Y-m-d");
    $gender = $faker->randomElement(['Male', 'Female']);
    $photo = $faker->image('public/imgs', 140, 140, 'people');
    return [
        'fullname' => $faker->name(strtolower($gender)),
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->numberBetween($min = 3101000000, $max = 3202000000),
        'birthdate' => $birthdate,
        'gender' => $gender,
        'address' => $faker->address,
        'photo' => substr($photo, 7),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
