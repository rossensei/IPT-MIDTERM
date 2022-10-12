<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 5),
        'acct_name' => $faker->name,
        'init_invest' => rand(1000, 10000),
        'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'remarks' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
