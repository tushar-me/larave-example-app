<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(), 
            'title' => $this->faker->words(3, true),
            'slug' => Str::slug($this->faker->unique()->words(3, true), '-'),
            'price' => $this->faker->numberBetween(100, 5000),
            'cover_image' => $this->faker->imageUrl(400, 400, 'product'),
            'description' => $this->faker->paragraph(),
        ];
    }
}
