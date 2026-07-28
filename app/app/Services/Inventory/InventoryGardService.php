<?php

namespace App\Services\Inventory;

use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\Inventory\InventoryOrderItem;
use Illuminate\Support\Facades\DB;

class InventoryGardService
{
    public function __construct(
        protected InventoryOrderService $orderService,
        protected InventoryTransactionService $transactionService,
    ) {}

    public function submitGard(array $data): InventoryOrder
    {
        $schoolId = $data['school_id'];

        return DB::transaction(function () use ($data, $schoolId) {
            $orderId = $data['order_id'] ?? null;

            if ($orderId) {
                $order = InventoryOrder::findOrFail($orderId);
                $this->orderService->reverseOrderStockMovements($order);
                $order->items()->delete();

                $order->update([
                    'date' => $data['date'] ?? $order->date,
                    'notes' => $data['notes'] ?? $order->notes,
                ]);
            } else {
                $order = $this->orderService->createOrder([
                    'school_id' => $schoolId,
                    'type' => 'gard',
                    'date' => $data['date'] ?? now(),
                    'notes' => $data['notes'] ?? null,
                ]);
            }

            foreach ($data['items'] as $itemData) {
                $item = InventoryItem::findOrFail($itemData['item_id']);
                $diff = $itemData['actual_stock'] - $item->current_stock;

                InventoryOrderItem::create([
                    'inventory_order_id' => $order->id,
                    'itemable_id' => $item->id,
                    'itemable_type' => InventoryItem::class,
                    'quantity_in' => $diff > 0 ? $diff : 0,
                    'quantity_out' => $diff < 0 ? abs($diff) : 0,
                    'unit_price' => 0,
                    'total' => 0,
                ]);

                if ($diff != 0) {
                    $this->transactionService->adjustStock(
                        $item,
                        $diff,
                        $itemData['actual_stock'],
                        "Gard #{$order->auto_number}",
                    );
                }
            }

            return $order->fresh(['items.itemable']);
        });
    }
}
