<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => null,
            'review'=> fake()->text(),
            'rating' => fake()->numberBetween(1, 5),
            'created_at' => fake()->dateTimeBetween('-2 years'),
            'updated_at' => fake()->dateTimeBetween( 'created_at', 'now'),
        ];
    }
    public function good()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating'=>fake()->numberBetween(4, 5),
            ];
        });
    }

    public function average()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating'=>fake()->numberBetween(2, 5),
            ];
        });
    }
    public function bad()
    {
        return $this->state(function (array $attributes) {
            return [
                'rating'=>fake()->numberBetween(1, 2),
            ];
        });
    }
}
