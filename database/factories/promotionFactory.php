<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\promotion>
 */
class promotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'from_grade' => $this->faker->numberBetween(1, 2),
            'from_class' => $this->faker->numberBetween(1, 6),
            'to_grade' => $this->faker->numberBetween(3, 4),
            'to_class' => $this->faker->numberBetween(1, 6),
            'student_id' => $this->faker->numberBetween(1, 300),
        ];
    }
}
