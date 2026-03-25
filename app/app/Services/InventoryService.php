<?php

namespace App\Services;

use App\Models\InventoryItem;
use App\Models\InventoryTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InventoryService
{
    public function addItem(array $data): InventoryItem
    {
        return DB::transaction(function () use ($data) {
            $item = InventoryItem::create([
                'name' => $data['name'],
                'type' => $data['type'] ?? 'stock',
                'category_id' => $data['category_id'] ?? null,
                'unit' => $data['unit'] ?? 'piece',
                'current_stock' => $data['current_stock'] ?? 0,
                'min_stock' => $data['min_stock'] ?? 0,
                'max_stock' => $data['max_stock'] ?? 0,
                'cost_price' => $data['cost_price'] ?? 0,
                'sell_price' => $data['sell_price'] ?? 0,
                'school_id' => $data['school_id'],
                'is_active' => $data['is_active'] ?? true,
                'description' => $data['description'] ?? null,
            ]);

            if (! empty($data['current_stock']) && $data['current_stock'] > 0) {
                $this->stockIn(
                    $item,
                    $data['current_stock'],
                    'initial',
                    null,
                    'Initial stock'
                );
            }

            return $item;
        });
    }

    public function updateItem(InventoryItem $item, array $data): InventoryItem
    {
        $item->update(array_filter([
            'name' => $data['name'] ?? null,
            'type' => $data['type'] ?? null,
            'category_id' => $data['category_id'] ?? null,
            'unit' => $data['unit'] ?? null,
            'min_stock' => $data['min_stock'] ?? null,
            'max_stock' => $data['max_stock'] ?? null,
            'cost_price' => $data['cost_price'] ?? null,
            'sell_price' => $data['sell_price'] ?? null,
            'is_active' => $data['is_active'] ?? null,
            'description' => $data['description'] ?? null,
        ]));

        return $item;
    }

    public function deleteItem(InventoryItem $item): bool
    {
        if ($item->transactions()->exists()) {
            throw new \Exception('Cannot delete item with existing transactions');
        }

        return $item->delete();
    }

    public function stockIn(
        InventoryItem $item,
        int $quantity,
        string $referenceType = 'order',
        ?int $referenceId = null,
        string $notes = ''
    ): InventoryTransaction {
        if ($quantity <= 0) {
            throw new \Exception('Quantity must be greater than 0');
        }

        return DB::transaction(function () use ($item, $quantity, $referenceType, $referenceId, $notes) {
            $newBalance = $item->current_stock + $quantity;

            $transaction = InventoryTransaction::create([
                'item_id' => $item->id,
                'type' => 'in',
                'quantity' => $quantity,
                'balance' => $newBalance,
                'reference_type' => $referenceType,
                'reference_id' => $referenceId,
                'notes' => $notes,
                'user_id' => Auth::id(),
                'school_id' => $item->school_id,
            ]);

            $item->update(['current_stock' => $newBalance]);

            return $transaction;
        });
    }

    public function stockOut(
        InventoryItem $item,
        int $quantity,
        string $referenceType = 'order',
        ?int $referenceId = null,
        string $notes = ''
    ): ?InventoryTransaction {
        if ($quantity <= 0) {
            throw new \Exception('Quantity must be greater than 0');
        }

        if (! $this->canStockOut($item, $quantity)) {
            throw new \Exception('Insufficient stock. Available: '.$item->current_stock);
        }

        return DB::transaction(function () use ($item, $quantity, $referenceType, $referenceId, $notes) {
            $newBalance = $item->current_stock - $quantity;

            $transaction = InventoryTransaction::create([
                'item_id' => $item->id,
                'type' => 'out',
                'quantity' => $quantity,
                'balance' => $newBalance,
                'reference_type' => $referenceType,
                'reference_id' => $referenceId,
                'notes' => $notes,
                'user_id' => Auth::id(),
                'school_id' => $item->school_id,
            ]);

            $item->update(['current_stock' => $newBalance]);

            return $transaction;
        });
    }

    public function adjustStock(
        InventoryItem $item,
        int $quantity,
        string $reason
    ): InventoryTransaction {
        return DB::transaction(function () use ($item, $quantity, $reason) {
            $newBalance = $quantity;
            $type = $quantity >= $item->current_stock ? 'in' : 'out';
            $diff = abs($quantity - $item->current_stock);

            $transaction = InventoryTransaction::create([
                'item_id' => $item->id,
                'type' => 'adjust',
                'quantity' => $quantity,
                'balance' => $newBalance,
                'reference_type' => 'adjustment',
                'reference_id' => null,
                'notes' => $reason,
                'user_id' => Auth::id(),
                'school_id' => $item->school_id,
            ]);

            $item->update(['current_stock' => $newBalance]);

            return $transaction;
        });
    }

    public function getCurrentStock(InventoryItem $item): int
    {
        return $item->current_stock;
    }

    public function getLowStockItems(int $schoolId)
    {
        return InventoryItem::bySchool($schoolId)
            ->active()
            ->lowStock()
            ->get();
    }

    public function getTransactionHistory(InventoryItem $item)
    {
        return $item->transactions()
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function canStockOut(InventoryItem $item, int $quantity): bool
    {
        return $item->current_stock >= $quantity;
    }

    public function validateStockAvailability(InventoryItem $item, int $quantity): array
    {
        return [
            'available' => $this->canStockOut($item, $quantity),
            'available_qty' => $item->current_stock,
            'requested_qty' => $quantity,
        ];
    }

    public function getItems(?string $type = null, ?int $schoolId = null)
    {
        $query = InventoryItem::query();

        if ($type) {
            $query->byType($type);
        }

        if ($schoolId) {
            $query->bySchool($schoolId);
        }

        return $query->active()->orderBy('name')->get();
    }
}
