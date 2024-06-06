<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fee_invoice>
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
            'grade_id' => $this->faker->numberBetween(1, 4),
            'classroom_id' => $this->faker->numberBetween(1, 6),
            'student_id'=>$this->faker->numberBetween(1, 300),
            'academic_year_id'=>'1',
            'school_fee_id'=>$this->faker->numberBetween(1, 50),
            'invoice_date'=>$this->faker->date('Y-m-d'),
        ];
    }
}
