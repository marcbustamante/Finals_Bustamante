<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'director' => $this->faker->name(),
            'genre' => $this->faker->word(),
            'release_year' => $this->faker->year(),
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'description' => $this->faker->paragraph(),
        ];
    }
}
