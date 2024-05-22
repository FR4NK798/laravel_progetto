<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
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
          
            'name' => fake()->words(rand(1, 4), true),
            'description' => fake()->words(rand(15, 20), true),
            'price' => rand(100, 350),
            'brand' => fake()->words(rand(1, 4), true),
            'img' => fake()->imageUrl(640, 480),
        
        ];
    }
}
