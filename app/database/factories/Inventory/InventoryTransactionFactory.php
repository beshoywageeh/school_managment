<?php

namespace Database\Factories\Inventory;

use App\Enums\TransactionType;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryTransaction;
use App\Models\School;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<InventoryTransaction>
 */
class InventoryTransactionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'item_id' => InventoryItem::factory(),
            'type' => Arr::random(TransactionType::cases()),
            'quantity' => $this->faker->numberBetween(1, 100),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'notes' => $this->faker->optional()->sentence(),
            'school_id' => School::factory(),
            'user_id' => User::factory(),
        ];
    }
}
