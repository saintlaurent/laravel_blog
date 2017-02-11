<?php

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6),
        'body' => $faker->sentence(10),
        'created_at' => $faker->dateTime,
        'user_id' => $faker->numberBetween(313, 322)
    ];
});
