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




//通过hph artisan tinker 使用factory同时填充多条数据
//factory(\App\Admin\AdminLoginModel::class，3)->create();
$factory->define(\App\Admin\AdminLoginModel::class,function (Faker\Generator $faker){
    static $password;
       return[

           'username' => $faker->name,
           'password' => $password ?: $password = bcrypt('123456'),

       ];


});








