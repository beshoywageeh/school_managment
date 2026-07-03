<?php

namespace Database\Factories;

use App\Models\ExceptionFees;
use App\Models\FeeInvoice;
use App\Models\ReceiptPayment;
use App\Models\StudentAccount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<StudentAccount>
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
            'fee_invoices_id' => FeeInvoice::inRandomOrder()->first()?->id,
            'exception_id' => ExceptionFees::inRandomOrder()->first()?->id,
            'academic_year_id' => '1',
            'receipt_payment_id' => ReceiptPayment::inRandomOrder()->first()
                ?->id,
            'debit' => $this->faker->numberBetween(1, 400),
            'credit' => $this->faker->numberBetween(1, 500),
            'type' => $this->faker->randomElement([
                'invoice',
                'payment',
                'exciption',
                'exchange',
            ]),
        ];
    }
}
