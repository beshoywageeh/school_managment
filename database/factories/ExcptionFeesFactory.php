<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExcptionFees>
 */
class ExcptionFeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'grade_id' => $this->faker->numberBetween(1, 4),
            'class_id' => $this->faker->numberBetween(1, 6),
            'student_id'=>$this->faker->numberBetween(1, 300),
            'academic_year_id'=>'1',
            'fee_id'=>$this->faker->numberBetween(1, 50),
            'date'=>$this->faker->date('Y-m-d'),
            'amount'=>$this->faker->numberBetween(100,500)
        ];
    }
}
