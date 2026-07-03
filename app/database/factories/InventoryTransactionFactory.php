<?php

namespace Database\Factories;

use App\Enums\TransactionType;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryTransaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<InventoryTransaction>
 */
class InventoryTransactionFactory extends Factory
{
    public function definition(): array
    {
        $item = InventoryItem::inRandomOrder()->first();

        return [
            'item_id' => $item?->id ?? 1,
            'type' => Arr::random(TransactionType::cases()),
            'quantity' => $this->faker->numberBetween(1, 100),
            'balance' => $item?->current_stock ?? 0,
            'notes' => $this->faker->optional()->sentence(),
            'school_id' => 1,
            'user_id' => 1,
        ];
    }
}
