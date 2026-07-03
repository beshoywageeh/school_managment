<?php

namespace Database\Factories;

use App\Enums\Jobs_types;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'type' => Arr::random(Jobs_types::cases()),
            'created_by' => '1',
            'school_id' => '1',
            'created_at' => now(),
        ];
    }
}
