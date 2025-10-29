<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'type' => $this->faker->numberBetween(1, 4),
            'status' => $this->faker->numberBetween(0, 1),
            'created_by' => '1',
            'created_at' => now(),

        ];
    }
}
