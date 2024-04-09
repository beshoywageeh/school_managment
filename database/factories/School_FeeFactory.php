<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\class_room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School_Fee>
 */
class School_FeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'grade_id' => Grade::all('id')->random(),
            'classroom_id' => class_room::all('id')->random(),
            'user_id' => '1',
            'description' => $this->faker->words(1, true),
            'amount' => $this->faker->numberBetween('1000', '9999')
        ];
    }
}
