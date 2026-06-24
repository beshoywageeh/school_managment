<?php

namespace Database\Factories;

use App\Models\Fee_invoice;
use App\Models\School_Fee;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fee_invoice>
 */
class Fee_invoiceFactory extends Factory
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
            'classroom_id' => function (array $attributes) {
                return Student::find($attributes['student_id'])
                    ->classroom_id;
            },
            'academic_year_id' => function (array $attributes) {
                return Student::find($attributes['student_id'])
                    ->acadmiecyear_id;
            },
            'school_fee_id' => function (array $attributes) {
                return School_Fee::where(
                    'academic_year_id',
                    $attributes['academic_year_id'],
                )
                    ->inRandomOrder()
                    ->first()?->id;
            },
            'invoice_date' => $this->faker->date('Y-m-d'),
            'school_id' => '1',
            'user_id' => '1',
        ];
    }
}
