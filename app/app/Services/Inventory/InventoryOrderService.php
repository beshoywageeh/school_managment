<?php

namespace App\Services\Inventory;

use App\Enums\InventoryOrderStatus;
use App\Enums\InventoryOrderType;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\Inventory\InventoryOrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InventoryOrderService
{
    public function __construct(
        protected InventoryTransactionService $transactionService,
    ) {}

    public function generateOrderNumber(int $schoolId, string $type): string
    {
        $lastOrder = InventoryOrder::where('school_id', $schoolId)
            ->where('type', $type)
            ->lockForUpdate()
            ->latest('id')
            ->first();

        $prefix = match ($type) {
            'inventory' => 'INV',
            'sales' => 'SRF',
            'purchases' => 'PUR',
            'gard' => 'GRD',
            default => 'ORD',
        };

        $nextNumber = $lastOrder
            ? ((int) filter_var(
                $lastOrder->auto_number,
                FILTER_SANITIZE_NUMBER_INT,
            )) + 1
            : 1;

        return $prefix.'-'.str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
    }

    public function createOrder(array $data): InventoryOrder
    {
        $autoNumber = $this->generateOrderNumber(
            $data['school_id'],
            $data['type'],
        );

        return InventoryOrder::create([
            'auto_number' => $autoNumber,
            'type' => $data['type'],
            'status' => InventoryOrderStatus::NOT_PAID,
            'student_id' => $data['student_id'] ?? null,
            'manual_number' => $data['manual_number'] ?? null,
            'manual_date' => $data['manual_date'] ?? null,
            'total_amount' => $data['total_amount'] ?? 0,
            'notes' => $data['notes'] ?? null,
            'school_id' => $data['school_id'],
            'user_id' => Auth::id(),
            'date' => $data['date'] ?? now(),
        ]);
    }

    public function createOrderItems(InventoryOrder $order, array $items): void
    {
        $totalAmount = 0;

        $itemIds = array_map(fn ($i) => $i['itemable_id'], $items);
        $itemMap = InventoryItem::whereIn('id', $itemIds)
            ->get()
            ->keyBy('id');

        foreach ($items as $itemData) {
            $quantityIn = $itemData['quantity_in'] ?? 0;
            $quantityOut = $itemData['quantity_out'] ?? 0;
            $unitPrice = $itemData['unit_price'] ?? 0;
            $pricedQuantity = $order->type === InventoryOrderType::SALES
                ? $quantityOut
                : $quantityIn;
            $lineTotal = $pricedQuantity * $unitPrice;

            InventoryOrderItem::create([
                'inventory_order_id' => $order->id,
                'itemable_id' => $itemData['itemable_id'],
                'itemable_type' => $itemData['itemable_type'],
                'quantity_in' => $quantityIn,
                'quantity_out' => $quantityOut,
                'unit_price' => $unitPrice,
                'total' => $lineTotal,
            ]);

            $item = $itemMap->get($itemData['itemable_id']);
            if (! $item) {
                continue;
            }

            if ($quantityIn > 0) {
                $this->transactionService->stockIn(
                    $item,
                    $quantityIn,
                    'order',
                    $order->id,
                    "Order #{$order->auto_number}",
                );
            }

            if ($quantityOut > 0) {
                $this->transactionService->stockOut(
                    $item,
                    $quantityOut,
                    'order',
                    $order->id,
                    "Order #{$order->auto_number}",
                );
            }

            $totalAmount += $lineTotal;
        }

        $order->update(['total_amount' => $totalAmount]);
    }

    public function updateOrder(InventoryOrder $order, array $data): InventoryOrder
    {
        DB::transaction(function () use ($order, $data) {
            $this->reverseOrderStockMovements($order);

            $order->items()->delete();

            $order->update([
                'student_id' => $data['student_id'] ?? $order->student_id,
                'manual_number' => $data['manual_number'] ?? $order->manual_number,
                'manual_date' => $data['manual_date'] ?? $order->manual_date,
                'notes' => $data['notes'] ?? $order->notes,
                'date' => $data['date'] ?? $order->date,
            ]);

            if (! empty($data['items'])) {
                $this->createOrderItems($order, $data['items']);
            }
        });

        return $order->fresh(['items']);
    }

    public function deleteOrder(InventoryOrder $order): bool
    {
        return DB::transaction(function () use ($order) {
            $this->reverseOrderStockMovements($order);
            $order->items()->delete();

            return $order->delete();
        });
    }

    public function payOrder(InventoryOrder $order): InventoryOrder
    {
        $order->update([
            'status' => $order->status === InventoryOrderStatus::PAID
                    ? InventoryOrderStatus::NOT_PAID
                    : InventoryOrderStatus::PAID,
        ]);

        return $order->fresh();
    }

    public function reverseOrderStockMovements(InventoryOrder $order): void
    {
        $itemIds = $order->items->pluck('itemable_id')->unique();
        $itemMap = InventoryItem::whereIn('id', $itemIds)
            ->get()
            ->keyBy('id');

        foreach ($order->items as $orderItem) {
            $item = $itemMap->get($orderItem->itemable_id);
            if (! $item) {
                continue;
            }

            if ($orderItem->quantity_in > 0) {
                $this->transactionService->stockOut(
                    $item,
                    $orderItem->quantity_in,
                    'reversal',
                    $order->id,
                    "Reversal of Order #{$order->auto_number}",
                );
            }

            if ($orderItem->quantity_out > 0) {
                $this->transactionService->stockIn(
                    $item,
                    $orderItem->quantity_out,
                    'reversal',
                    $order->id,
                    "Reversal of Order #{$order->auto_number}",
                );
            }
        }
    }
}
