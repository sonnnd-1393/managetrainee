<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Batch as Batch;
use Faker\Generator as Faker;

$factory->define(Batch::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'start_date' =>$faker->date($format = 'Y-m-d', $max = 'now') ,
        'end_date' => $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 5 days', $timezone = null),
    ];
});
