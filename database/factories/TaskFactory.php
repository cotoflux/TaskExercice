<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\App;
use Faker\Generator as Faker;

$factory->define(App::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'description' => $faker->text(20),
        'due_date'=>$faker->date(),
        'completed'=> $faker->boolean(),
   ];
});