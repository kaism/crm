<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Email;
use Faker\Generator as Faker;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'message_id' => $faker->uuid . $faker->email,
        'from' => function () {
        	return factory(App\EmailAddress::class)->create()->id;
        },
        'to' => function () {
        	return factory(App\EmailAddress::class)->create()->id;
        },
        'subject' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
