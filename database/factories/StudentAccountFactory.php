<?php

namespace Database\Factories;

use App\Models\ExcptionFees;
use App\Models\Fee_invoice;
use App\Models\Recipt_Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentAccount>
 */
class StudentAccountFactory extends Factory
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
            'student_id' => $this->faker->numberBetween(1, 100),
            'date' => $this->faker->date('Y-m-d'),
            'fee_invoices_id' => Fee_invoice::all()->random()->id,
            'excpetion_id' => ExcptionFees::all()->random()->id,
            'academic_year_id' => '1',
            'recipt__payments_id' => Recipt_Payment::all()->random()->id,
            'debit' => $this->faker->numberBetween(1, 400),
            'credit' => $this->faker->numberBetween(1, 500),
            'type' => $this->faker->numberBetween(1, 3),
        ];
    }
}
