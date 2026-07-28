<?php

namespace Database\Factories;

use App\Models\promotion;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<promotion>
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
            'to_acc' => $this->faker->numberBetween(1, 3),
            'from_acc' => $this->faker->numberBetween(1, 3),
            'student_id' => $this->faker->numberBetween(1, 300),
            'user_id' => '1',
            'school_id' => School::factory(),
        ];
    }
}
