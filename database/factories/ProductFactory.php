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
            'title' => fake()->text(25),
            'description' => fake()->text(100),
            'price' => fake()->randomFloat(2, 0, 100),
            'images' => fake()->image(),
            'category_id' => fake()->numberBetween(1, 10), // Assuming we have 10 categories in our database
            'subCategory_id' => fake()->numberBetween(1, 100),
            'user_id' => fake()->numberBetween(1,1),
            'stock' => fake()->numberBetween(1,5),
            'review_count' => fake()->numberBetween(1,5),
            'rating_sum' => fake()->numberBetween(1,10),
            'views_count' => fake()->numberBetween(1,20),
            'sales_count' => fake()->numberBetween(1,20),
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
