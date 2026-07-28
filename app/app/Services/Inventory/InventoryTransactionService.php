<?php

namespace App\Services\Inventory;

use App\Exceptions\InventoryException;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InventoryTransactionService
{
    public function stockIn(
        InventoryItem $item,
        int|float $quantity,
        string $referenceType = 'order',
        ?int $referenceId = null,
        string $notes = '',
    ): InventoryTransaction {
        if ($quantity <= 0) {
            throw new InventoryException('Quantity must be greater than 0');
        }

        return DB::transaction(function () use (
            $item,
            $quantity,
            $referenceType,
            $referenceId,
            $notes,
        ) {
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
        int|float $quantity,
        string $referenceType = 'order',
        ?int $referenceId = null,
        string $notes = '',
    ): ?InventoryTransaction {
        if ($quantity <= 0) {
            throw new InventoryException('Quantity must be greater than 0');
        }

        if (! $this->canStockOut($item, $quantity)) {
            throw new InventoryException(
                'Insufficient stock. Available: '.$item->current_stock,
            );
        }

        return DB::transaction(function () use (
            $item,
            $quantity,
            $referenceType,
            $referenceId,
            $notes,
        ) {
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
        int|float $quantity,
        int|float $actualStock,
        string $reason,
    ): InventoryTransaction {
        return DB::transaction(function () use (
            $item,
            $quantity,
            $actualStock,
            $reason,
        ) {
            $transaction = InventoryTransaction::create([
                'item_id' => $item->id,
                'type' => 'adjust',
                'quantity' => $quantity,
                'balance' => $actualStock,
                'reference_type' => 'adjustment',
                'reference_id' => null,
                'notes' => $reason,
                'user_id' => Auth::id(),
                'school_id' => $item->school_id,
            ]);

            $item->update(['current_stock' => $actualStock]);

            return $transaction;
        });
    }

    public function getTransactionHistory(InventoryItem $item)
    {
        return $item
            ->transactions()
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function canStockOut(InventoryItem $item, int|float $quantity): bool
    {
        return $item->current_stock >= $quantity;
    }

    public function validateStockAvailability(InventoryItem $item, int|float $quantity): array
    {
        return [
            'available' => $this->canStockOut($item, $quantity),
            'available_qty' => $item->current_stock,
            'requested_qty' => $quantity,
        ];
    }
}
