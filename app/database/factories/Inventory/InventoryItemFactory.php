<?php

namespace Database\Factories\Inventory;

use App\Enums\InventoryItemCategory;
use App\Enums\InventoryItemType;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\Inventory\InventoryItem;
use App\Models\School;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<InventoryItem>
 */
class InventoryItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'school_id' => School::factory(),
            'type' => Arr::random(InventoryItemType::cases()),
            'category' => Arr::random(InventoryItemCategory::cases()),
            'name' => $this->faker->words(2, true),
            'unit' => $this->faker->word(),
            'current_stock' => $this->faker->numberBetween(10, 1000),
            'min_stock' => $this->faker->numberBetween(5, 50),
            'max_stock' => $this->faker->numberBetween(50, 1000),
            'cost_price' => $this->faker->randomFloat(2, 10.0, 100.0),
            'sell_price' => $this->faker->randomFloat(2, 20.0, 200.0),
            'sales_price_set' => 0,
            'is_active' => true,
            'opening_qty' => $this->faker->numberBetween(50, 1000),
            'opening_date' => now()->toDateString(),
            'grade_id' => Grade::factory(),
            'classroom_id' => ClassRoom::factory(),
            'user_id' => User::factory(),
            'description' => $this->faker->sentence(),
        ];
    }
}
