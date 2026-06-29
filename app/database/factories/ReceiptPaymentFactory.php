<?php

namespace Database\Factories;

use App\Models\acadmice_year;
use App\Models\ReceiptPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ReceiptPayment>
 */
class ReceiptPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'manual' => ReceiptPayment::orderBy('manual', 'desc')->first()
                ? str_pad(
                    ReceiptPayment::orderBy('manual', 'desc')->first()
                        ->manual + 1,
                    5,
                    '0',
                    STR_PAD_LEFT,
                )
                : '00001',
            'date' => $this->faker->date('Y-m-d'),
            'student_id' => $this->faker->numberBetween(1, 300),
            'academic_year_id' => acadmice_year::inRandomOrder()->first()
                ?->id,
            'Debit' => $this->faker->numberBetween(500, 5000),
            'user_id' => '1',
            'school_id' => '1',
        ];
    }
}
