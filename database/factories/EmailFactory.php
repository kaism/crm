<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Email;
use Faker\Generator as Faker;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'message_id' => $faker->uuid . $faker->email,
        'from' => $faker->email,
        'to' => $faker->email,
        'subject' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
