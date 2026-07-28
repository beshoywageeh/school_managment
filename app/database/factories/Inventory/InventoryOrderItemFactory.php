<?php

namespace Database\Factories\Inventory;

use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\Inventory\InventoryOrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<InventoryOrderItem>
 */
class InventoryOrderItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'inventory_order_id' => InventoryOrder::factory(),
            'itemable_id' => InventoryItem::factory(),
            'itemable_type' => InventoryItem::class,
            'quantity_in' => $this->faker->numberBetween(1, 100),
            'quantity_out' => $this->faker->numberBetween(0, 50),
            'unit_price' => $this->faker->randomFloat(2, 10, 500),
            'total' => function (array $attributes) {
                $qty = max($attributes['quantity_in'], $attributes['quantity_out']);

                return $qty * ($attributes['unit_price'] ?? 0);
            },
        ];
    }
}
