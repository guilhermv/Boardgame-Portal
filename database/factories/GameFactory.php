<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'genre' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'max_players' => $this->faker->randomDigit(),
            'year' => $this->faker->randomDigit(),
            'score_avg' => $this->faker->randomDigit(),
            'price_avg' => $this->faker->randomDigit(),
        ];
    }
}
