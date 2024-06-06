<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recipt_Payment;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipt_Payment>
 */
class Recipt_PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
                            
            'manual'=>Recipt_Payment::orderBy('manual', 'desc')->first() ? str_pad(Recipt_Payment::orderBy('manual', 'desc')->first()->manual + 1, 5, '0', STR_PAD_LEFT) : '00001',
            'date'=>$this->faker->date('Y-m-d'),
            'student_id'=>$this->faker->numberBetween(1,400),
            'academic_year_id'=>'1',
            'Debit'=>$this->faker->numberBetween(500,5000)
        ];
    }
}