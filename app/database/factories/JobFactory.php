<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Model>
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
            'type' => Arr::Random(Job_type::cases()),
            'status' => Arr::Random(Status::cases()),
            'created_by' => '1',
            'created_at' => now(),
        ];
    }
}
