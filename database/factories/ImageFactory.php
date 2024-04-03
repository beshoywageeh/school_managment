<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'filename' => '1.jpg',
            'imageable_id' => $this->faker->numberBetween(1, 100),
            'imageable_type' => $this->faker->randomElement(['App\Models\User', 'App\Models\My_parent', 'App\Models\Class_room','App\Models\settings','App\Models\Student']),
        ];
    }
}