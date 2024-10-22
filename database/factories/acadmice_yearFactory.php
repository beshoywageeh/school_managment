<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\acadmice_year>
 */
class acadmice_yearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'year_start' => $this->faker->date('Y-m-d'),
            'year_end' => $this->faker->date('Y-m-d'),
            'view' => $this->faker->date('Y').'-'.$this->faker->date('Y'),
            'status' => '0',
            'created_by' => '1',
        ];
    }
}
