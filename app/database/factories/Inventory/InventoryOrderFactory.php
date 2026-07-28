<?php

namespace Database\Factories\Inventory;

use App\Enums\InventoryOrderStatus;
use App\Enums\InventoryOrderType;
use App\Models\Inventory\InventoryOrder;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
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
            'auto_number' => strtoupper(fake()->lexify('???')).'-'.str_pad(fake()->unique()->randomNumber(5), 5, '0', STR_PAD_LEFT),
            'type' => Arr::random(InventoryOrderType::cases()),
            'status' => Arr::random(InventoryOrderStatus::cases()),
            'student_id' => Student::factory(),
            'total_amount' => $this->faker->randomFloat(2, 100, 10000),
            'notes' => $this->faker->optional()->sentence(),
            'school_id' => School::factory(),
            'user_id' => User::factory(),
            'date' => $this->faker->date('Y-m-d'),
        ];
    }
}
