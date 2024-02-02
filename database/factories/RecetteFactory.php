<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recette>
 */
class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
                'title' => $this->faker->sentence,
                'description' => $this->faker->paragraph,
                'ingredients' => $this->faker->text,
                'instructions' => $this->faker->text,
                'img' => $this->faker->imageUrl(),
            ];
    }
}
