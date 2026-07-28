<?php

namespace Database\Factories;

use App\Models\FeeInvoice;
use App\Models\School;
use App\Models\SchoolFee;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FeeInvoice>
 */
class FeeInvoiceFactory extends Factory
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
                return SchoolFee::where(
                    'academic_year_id',
                    $attributes['academic_year_id'],
                )
                    ->inRandomOrder()
                    ->first()?->id;
            },
            'invoice_date' => $this->faker->date('Y-m-d'),
            'school_id' => School::factory(),
            'user_id' => '1',
        ];
    }
}
