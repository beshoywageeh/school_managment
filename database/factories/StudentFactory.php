<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'birth_date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'join_date' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'user_id' => '1',
            'grade_id' => $this->faker->numberBetween(1, 4),
            'classroom_id' => $this->faker->numberBetween(1, 50),
            'parent_id' => $this->faker->numberBetween(1, 200),
        ];
    }
}
