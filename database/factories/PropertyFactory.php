<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fake()->slug(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 100000, 1000000),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->city(),
            'type' => fake()->randomElement(['house', 'apartment', 'condo', 'townhouse', 'villa']),
            'room' => fake()->numberBetween(1, 10),
            'bedroom' => fake()->numberBetween(1, 10),
            'bathroom' => fake()->numberBetween(1, 10),
            'bigyard' => fake()->numberBetween(1, 10),
            'purpose' => fake()->randomElement(['sale', 'rent']),
            'area' => fake()->numberBetween(1, 1000),
            'parking' => fake()->boolean(),
            'elevator' => fake()->boolean(),
            'wifi' => fake()->boolean(),
            'builded_year' => fake()->numberBetween(1900, 2025),
            'published_at' => fake()->dateTimeBetween('-1 week', '+1 week'),
            'created_by' => User::factory(),
            'updated_by' => User::factory(),
        ];
    }
}
