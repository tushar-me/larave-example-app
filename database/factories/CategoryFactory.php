<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'slug' => Str::slug($this->faker->unique()->words(2, true), '-'),
            'icon' => $this->faker->imageUrl(64, 64, 'icon'), 
            'banner' => $this->faker->imageUrl(1200, 300, 'banner'), 
            'description' => $this->faker->paragraph(),
        ];
    }
}
