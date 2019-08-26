<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\author;
use App\User;
use App\Employees;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
//
//$factory->define(App\Product::class, function (Faker $faker) {
//
//    return [
//
//        "Product_name" => $faker->unique()->name,
//
//    ];
//
////});
//$factory->define(App\Employees::class, function (Faker $faker) {
//
//    return [
//
//        "employees_id" => $faker -> randomFloat(0,1,100),
//        "Employees_name" => $faker -> name,
//        "Order_id" => $faker -> randomFloat(0,1,100),
//        "sex" => $faker -> boolean,
//        "Address" => $faker -> address,
//        "PhoneNumber" => $faker -> phoneNumber,
//        "EMail" => $faker -> email,
//        "birthday" => $faker -> dateTime,
//        "active"  => $faker -> boolean,
//
//    ];
//
//});
