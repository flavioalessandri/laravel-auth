<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
          'title'   => $faker -> sentence($nbWords = 3, $variableNbWords = true),
          'description'  => $faker -> text ($maxNbChars = 150),
          'difficulty_level'  => $faker -> numberBetween(1,5)
    ];
});
