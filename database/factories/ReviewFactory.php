<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Game;
use App\Models\User;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player_id' => User::factory()->create()->id,
            'game_id' => Game::factory()->create()->id,
            'rank' => $this->faker->randomDigit(),
            'body' => $this->faker->paragraph(),
            
        ];
    }
}
