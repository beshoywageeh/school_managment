<?php

namespace Database\Factories;

use App\Enums\InventoryOrderStatus;
use App\Enums\InventoryOrderType;
use App\Models\Inventory\InventoryOrder;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<InventoryOrder>
 */
class InventoryOrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type' => Arr::random(InventoryOrderType::cases()),
            'status' => Arr::random(InventoryOrderStatus::cases()),
            'student_id' => Student::inRandomOrder()->first()?->id ?? 1,
            'total_amount' => $this->faker->randomFloat(2, 100, 10000),
            'notes' => $this->faker->optional()->sentence(),
            'school_id' => 1,
            'user_id' => 1,
            'date' => $this->faker->date('Y-m-d'),
        ];
    }
}
