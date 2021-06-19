<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        'player_id' => function () {
            return factory('App\User')->create()->id;
        },
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'genre' => $faker->sentence,
        'description' => $faker->paragraph,
        'max_players' => $faker->randomDigit,
        'year' => $faker->randomDigit,
        'score_avg' => $faker->randomDigit,
        'price_avg' => $faker->randomDigit,
    ];
});
