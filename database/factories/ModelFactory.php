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
        'name' => $faker->name,
        'avatar'=>$faker->imageUrl(256,256),
        'email' => $faker->safeEmail,
        'confirm_code' => str_random(32),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\FlightLog::class, function (Faker\Generator $faker) {
    $airports = \App\Airport::lists('iata')->toArray();
    $users = \App\User::lists('id')->toArray();
    return [
        'user_id'=>$faker->randomElement($users),
        'date'=>$faker->date(),
        'flight_no'=>$faker->countryCode.$faker->numberBetween(100,9999),
        'std'=>$faker->time(),
        'sta'=>$faker->time(),
        'from'=>$faker->randomElement($airports),
        'to'=>$faker->randomElement($airports),
        'seat'=>$faker->numberBetween(1,80).$faker->randomElement(['A','B','C','D','E','F','G','H']),
        'class'=>strtoupper($faker->randomLetter),
        'bn'=>$faker->numberBetween(1,320),
        'atd'=>$faker->time(),
        'ata'=>$faker->time(),
        'reg'=>'B-'.$faker->numberBetween(1000,9999),
        'departure_runway'=>sprintf("%2d",$faker->numberBetween(1,36)),
        'arrival_runway'=>sprintf("%2d",$faker->numberBetween(1,36)),
        'boarding_pass'=>$faker->imageUrl(),

    ];
});
