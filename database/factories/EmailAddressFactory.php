<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\EmailAddress;
use Faker\Generator as Faker;

$factory->define(EmailAddress::class, function (Faker $faker) {
    return [
        'address' => $faker->email,
        'client_id' => function () {
        	return factory(App\Client::class)->create()->id;
        }
    ];
});
