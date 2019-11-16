<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


use Faker\Generator;

$factory->define(\App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'slug' => $faker->slug,
        'subtitle'=>$faker->name,
        'content'=>$faker->text,
        'published_at'=>$faker->date(),
        'image'=>$faker->url,
        'category_id'=> $faker->numberBetween(1, 10)
    ];
});

$factory->define(\App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'slug' => $faker->slug
    ];
});

