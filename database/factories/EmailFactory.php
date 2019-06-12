<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Email;
use App\EmailAddress;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'message_id' => $faker->uuid . $faker->email,
        'from' => function () {
            return factory(EmailAddress::class)->create()->id;
        },
        'to' => function () {
            return factory(EmailAddress::class)->create()->id;
        },
        'subject' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

$factory->state(Email::class, 'sent', [
        'from' => function () {
            return factory(EmailAddress::class)->create(['is_user' => true])->id;
        }
]);

$factory->state(Email::class, 'received', [
        'to' => function () {
            return factory(EmailAddress::class)->create(['is_user' => true])->id;
        }
]);
