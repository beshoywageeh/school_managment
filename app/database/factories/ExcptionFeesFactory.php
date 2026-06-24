<?php

namespace Database\Factories;

use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ExcptionFees>
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
            'student_id' => Student::inRandomOrder()->first()?->id,
            'grade_id' => function (array $attributes) {
                return Student::find($attributes['student_id'])->grade_id;
            },
            'class_id' => function (array $attributes) {
                return Student::find($attributes['student_id'])
                    ->classroom_id;
            },
            'fee_id' => function (array $attributes) {
                return Fee_invoice::where(
                    'grade_id',
                    $attributes['grade_id'],
                )
                    ->inRandomOrder()
                    ->first()?->id;
            },
            'academic_year_id' => function (array $attributes) {
                return Student::find($attributes['student_id'])
                    ->acadmiecyear_id;
            },
            'date' => $this->faker->date('Y-m-d'),
            'amount' => $this->faker->numberBetween(100, 500),
            'school_id' => '1',
            'user_id' => '1',
        ];
    }
}
