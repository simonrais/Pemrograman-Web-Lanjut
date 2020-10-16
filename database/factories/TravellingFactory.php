<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Travelling;
use Faker\Generator as Faker;

$factory->define(Travelling::class, function (Faker $faker) {
    return [
        'title' => $faker ->sentence (),
        'content'=> $faker ->realText(2000),
        'imageurl'=> $faker ->imageUrl(750, 300,'cats',true)
    ];
});
