<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'id' -> $faker ->sentence (),
        'title' -> $faker ->sentence (),
        'content' -> $faker ->sentence (),
        // 'featured_image' ->$faker ->imageurl(750,300, 'cats' true)
    ];
});
