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
            'code' => $this->faker->numerify('########'),
            'name' => $this->faker->name(),
            'birth_date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'join_date' => $this->faker->date(),
            'gender' => $this->faker->numberBetween(0, 1),
            'national_id' => $this->faker->numerify('##############'),
            'user_id' => '1',
            'grade_id' => $this->faker->numberBetween(1, 4),
            'classroom_id' => $this->faker->numberBetween(1, 6),
            'parent_id' => $this->faker->numberBetween(1, 200),
            'slug' => $this->faker->slug(),
            'student_status' => $this->faker->numberBetween(0, 3),
            'birth_at_begin' => $this->faker->date(),
            'religion' => $this->faker->numberBetween(0, 1),
            'acadmiecyear_id' => $this->faker->numberBetween(1, 2),

        ];
    }
}
