<?php

namespace App\Services\Inventory;

use App\Exceptions\InventoryException;
use App\Models\Inventory\InventoryItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InventoryItemService
{
    public function addItem(array $data): InventoryItem
    {
        return DB::transaction(function () use ($data) {
            $item = InventoryItem::create([
                'name' => $data['name'],
                'type' => $data['type'] ?? 'stock',
                'category' => $data['category'] ?? null,
                'unit' => $data['unit'] ?? 'piece',
                'current_stock' => $data['current_stock'] ?? 0,
                'min_stock' => $data['min_stock'] ?? 0,
                'max_stock' => $data['max_stock'] ?? 0,
                'cost_price' => $data['cost_price'] ?? 0,
                'sell_price' => $data['sell_price'] ?? 0,
                'opening_qty' => $data['opening_qty'] ?? null,
                'opening_date' => $data['opening_date'] ?? null,
                'grade_id' => $data['grade_id'] ?? null,
                'classroom_id' => $data['classroom_id'] ?? null,
                'school_id' => $data['school_id'],
                'user_id' => $data['user_id'] ?? Auth::id(),
                'is_active' => $data['is_active'] ?? true,
                'description' => $data['description'] ?? null,
                'sales_price_set' => $data['sales_price_set'] ?? null,
            ]);

            if (! empty($data['opening_qty']) && $data['opening_qty'] > 0) {
                $transactionService = app(InventoryTransactionService::class);
                $transactionService->stockIn(
                    $item,
                    $data['opening_qty'],
                    'initial',
                    null,
                    'Opening stock',
                );
            }

            return $item;
        });
    }

    public function updateItem(InventoryItem $item, array $data): InventoryItem
    {
        $attributes = [
            'name' => array_key_exists('name', $data) ? $data['name'] : $item->name,
            'type' => array_key_exists('type', $data) ? $data['type'] : $item->type,
            'unit' => array_key_exists('unit', $data) ? $data['unit'] : $item->unit,
            'min_stock' => array_key_exists('min_stock', $data) ? $data['min_stock'] : $item->min_stock,
            'max_stock' => array_key_exists('max_stock', $data) ? $data['max_stock'] : $item->max_stock,
            'cost_price' => array_key_exists('cost_price', $data) ? $data['cost_price'] : $item->cost_price,
            'sell_price' => array_key_exists('sell_price', $data) ? $data['sell_price'] : $item->sell_price,
            'category' => array_key_exists('category', $data) ? ($data['category'] ?? null) : $item->category,
            'grade_id' => array_key_exists('grade_id', $data) ? ($data['grade_id'] ?? null) : $item->grade_id,
            'classroom_id' => array_key_exists('classroom_id', $data) ? ($data['classroom_id'] ?? null) : $item->classroom_id,
            'is_active' => array_key_exists('is_active', $data) ? $data['is_active'] : $item->is_active,
            'description' => array_key_exists('description', $data) ? ($data['description'] ?? null) : $item->description,
        ];

        if (array_key_exists('current_stock', $data)) {
            $attributes['current_stock'] = $data['current_stock'];
        }

        $item->update($attributes);

        return $item;
    }

    public function deleteItem(InventoryItem $item): bool
    {
        if ($item->orderItems()->exists()) {
            throw new InventoryException(
                'Cannot delete item with existing order items',
            );
        }

        if ($item->transactions()->exists()) {
            throw new InventoryException(
                'Cannot delete item with existing transactions',
            );
        }

        return $item->delete();
    }

    public function getItems(?string $type = null, ?int $schoolId = null)
    {
        $query = InventoryItem::query();

        if ($type && $type !== 'all') {
            $query->byType($type);
        }

        if ($schoolId) {
            $query->bySchool($schoolId);
        }

        return $query->active()->orderBy('name')->get();
    }

    public function getLowStockItems(int $schoolId)
    {
        return InventoryItem::bySchool($schoolId)
            ->active()
            ->lowStock()
            ->get();
    }

    public function getCurrentStock(InventoryItem $item): int|float
    {
        return $item->current_stock;
    }
}
