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
    $faker = Faker\Factory::create('es_ES');

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'admin'=> false,
    ];
});


$factory->define(App\Capitulo::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('es_ES');

    return [
        'orden' => $faker->numberBetween(1,100),
        'descripcion' => $faker->text($maxNbChars = 10),
        'duracion' => $faker->time,
    ];
});
/*
$factory->define(App\Temporada::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('es_ES');
    return [
        'nombre' => $faker->text($maxNbChars = 10),
    ];
});*/
