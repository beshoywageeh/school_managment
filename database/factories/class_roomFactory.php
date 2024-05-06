<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\class_room>
 */
class class_roomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_name' => $this->faker->words(1, true),
            'grade_id' => $this->faker->numberBetween(1, 4),
            'user_id' => '1',
        ];
    }
}
