<?php

namespace App\Services\Inventory;

use App\Enums\InventoryOrderStatus;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\Inventory\InventoryOrderItem;
use App\Models\Inventory\InventoryTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\class_room;

class InventoryService
{
    public function addItem(array $data): InventoryItem
    {
        return DB::transaction(function () use ($data) {
            $item = InventoryItem::create([
                "name" => $data["name"],
                "type" => $data["type"] ?? "stock",
                "category" => $data["category"] ?? null,
                "unit" => $data["unit"] ?? "piece",
                "current_stock" => $data["current_stock"] ?? 0,
                "min_stock" => $data["min_stock"] ?? 0,
                "max_stock" => $data["max_stock"] ?? 0,
                "cost_price" => $data["cost_price"] ?? 0,
                "sell_price" => $data["sell_price"] ?? 0,
                "opening_qty" => $data["opening_qty"] ?? null,
                "opening_date" => $data["opening_date"] ?? null,
                "grade_id" =>
                    class_room::where("id", $data["classroom_id"])->first()
                        ->grade_id ?? null,
                "classroom_id" => $data["classroom_id"] ?? null,
                "school_id" => $data["school_id"],
                "user_id" => $data["user_id"] ?? Auth::id(),
                "is_active" => $data["is_active"] ?? true,
                "description" => $data["description"] ?? null,
            ]);

            if (!empty($data["opening_qty"]) && $data["opening_qty"] > 0) {
                $this->stockIn(
                    $item,
                    $data["opening_qty"],
                    "initial",
                    null,
                    "Opening stock",
                );
            }

            return $item;
        });
    }

    public function updateItem(
        InventoryItem $item,
        array $data,
    ): InventoryItem {
        $item->update(
            array_filter([
                "name" => $data["name"] ?? $item->name,
                "type" => $data["type"] ?? $item->type,
                "category" => array_key_exists("category", $data)
                    ? $data["category"] ?? null
                    : $item->category,
                "unit" => $data["unit"] ?? $item->unit,
                "min_stock" => $data["min_stock"] ?? $item->min_stock,
                "max_stock" => $data["max_stock"] ?? $item->max_stock,
                "cost_price" => $data["cost_price"] ?? $item->cost_price,
                "sell_price" => $data["sell_price"] ?? $item->sell_price,
                "grade_id" => array_key_exists("grade_id", $data)
                    ? $data["grade_id"] ?? null
                    : $item->grade_id,
                "classroom_id" => array_key_exists("classroom_id", $data)
                    ? $data["classroom_id"] ?? null
                    : $item->classroom_id,
                "is_active" => $data["is_active"] ?? $item->is_active,
                "description" =>
                    $data["description"] ?? $item->description,
            ]),
        );

        return $item;
    }

    public function deleteItem(InventoryItem $item): bool
    {
        if ($item->transactions()->exists()) {
            throw new \Exception(
                "Cannot delete item with existing transactions",
            );
        }

        return $item->delete();
    }

    public function generateOrderNumber(
        int $schoolId,
        string $type,
    ): string {
        $lastOrder = InventoryOrder::where("school_id", $schoolId)
            ->where("type", $type)
            ->latest("id")
            ->first();

        $prefix = match ($type) {
            "inventory" => "INV",
            "sales" => "SRF",
            "gard" => "GRD",
            default => "ORD",
        };

        $nextNumber = $lastOrder
            ? ((int) filter_var(
                    $lastOrder->auto_number,
                    FILTER_SANITIZE_NUMBER_INT,
                )) + 1
            : 1;

        return $prefix . "-" . str_pad($nextNumber, 5, "0", STR_PAD_LEFT);
    }

    public function createOrder(array $data): InventoryOrder
    {
        $autoNumber = $this->generateOrderNumber(
            $data["school_id"],
            $data["type"],
        );

        return InventoryOrder::create([
            "auto_number" => $autoNumber,
            "type" => $data["type"],
            "status" => InventoryOrderStatus::NOT_PAID,
            "student_id" => $data["student_id"] ?? null,
            "manual_number" => $data["manual_number"] ?? null,
            "manual_date" => $data["manual_date"] ?? null,
            "total_amount" => $data["total_amount"] ?? 0,
            "notes" => $data["notes"] ?? null,
            "school_id" => $data["school_id"],
            "user_id" => Auth::id(),
            "date" => $data["date"] ?? now(),
        ]);
    }

    public function createOrderItems(
        InventoryOrder $order,
        array $items,
    ): void {
        $totalAmount = 0;

        foreach ($items as $itemData) {
            $quantityIn = $itemData["quantity_in"] ?? 0;
            $quantityOut = $itemData["quantity_out"] ?? 0;
            $unitPrice = $itemData["unit_price"] ?? 0;
            $lineTotal = ($quantityIn + $quantityOut) * $unitPrice;

            InventoryOrderItem::create([
                "inventory_order_id" => $order->id,
                "itemable_id" => $itemData["itemable_id"],
                "itemable_type" => $itemData["itemable_type"],
                "quantity_in" => $quantityIn,
                "quantity_out" => $quantityOut,
                "unit_price" => $unitPrice,
                "total" => $lineTotal,
            ]);

            if ($quantityIn > 0) {
                $item = InventoryItem::find($itemData["itemable_id"]);
                if ($item) {
                    $this->stockIn(
                        $item,
                        $quantityIn,
                        "order",
                        $order->id,
                        "Order #{$order->auto_number}",
                    );
                }
            }

            if ($quantityOut > 0) {
                $item = InventoryItem::find($itemData["itemable_id"]);
                if ($item) {
                    $this->stockOut(
                        $item,
                        $quantityOut,
                        "order",
                        $order->id,
                        "Order #{$order->auto_number}",
                    );
                }
            }

            $totalAmount += $lineTotal;
        }

        $order->update(["total_amount" => $totalAmount]);
    }

    public function updateOrder(
        InventoryOrder $order,
        array $data,
    ): InventoryOrder {
        DB::transaction(function () use ($order, $data) {
            $this->reverseOrderStockMovements($order);

            $order->items()->delete();

            $order->update([
                "student_id" => $data["student_id"] ?? $order->student_id,
                "manual_number" =>
                    $data["manual_number"] ?? $order->manual_number,
                "manual_date" =>
                    $data["manual_date"] ?? $order->manual_date,
                "notes" => $data["notes"] ?? $order->notes,
                "date" => $data["date"] ?? $order->date,
            ]);

            if (!empty($data["items"])) {
                $this->createOrderItems($order, $data["items"]);
            }
        });

        return $order->fresh(["items"]);
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
            "status" =>
                $order->status === InventoryOrderStatus::PAID
                    ? InventoryOrderStatus::NOT_PAID
                    : InventoryOrderStatus::PAID,
        ]);

        return $order->fresh();
    }

    public function getOrders(
        int $schoolId,
        ?string $type = null,
        array $filters = [],
    ) {
        $query = InventoryOrder::where("school_id", $schoolId);

        if ($type && $type !== "all") {
            $query->where("type", $type);
        }

        if (!empty($filters["status"])) {
            $query->where("status", $filters["status"]);
        }

        if (!empty($filters["student_id"])) {
            $query->where("student_id", $filters["student_id"]);
        }

        if (!empty($filters["from_date"])) {
            $query->whereDate("date", ">=", $filters["from_date"]);
        }

        if (!empty($filters["to_date"])) {
            $query->whereDate("date", "<=", $filters["to_date"]);
        }

        return $query
            ->with("items.itemable")
            ->withCount("items")
            ->latest()
            ->paginate($filters["per_page"] ?? 10);
    }

    public function getOrderItems(InventoryOrder $order)
    {
        return $order->items()->with("itemable")->get();
    }

    public function stockIn(
        InventoryItem $item,
        int|float $quantity,
        string $referenceType = "order",
        ?int $referenceId = null,
        string $notes = "",
    ): InventoryTransaction {
        if ($quantity <= 0) {
            throw new \Exception("Quantity must be greater than 0");
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
                "item_id" => $item->id,
                "type" => "in",
                "quantity" => $quantity,
                "balance" => $newBalance,
                "reference_type" => $referenceType,
                "reference_id" => $referenceId,
                "notes" => $notes,
                "user_id" => Auth::id(),
                "school_id" => $item->school_id,
            ]);

            $item->update(["current_stock" => $newBalance]);

            return $transaction;
        });
    }

    public function stockOut(
        InventoryItem $item,
        int|float $quantity,
        string $referenceType = "order",
        ?int $referenceId = null,
        string $notes = "",
    ): ?InventoryTransaction {
        if ($quantity <= 0) {
            throw new \Exception("Quantity must be greater than 0");
        }

        if (!$this->canStockOut($item, $quantity)) {
            throw new \Exception(
                "Insufficient stock. Available: " . $item->current_stock,
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
                "item_id" => $item->id,
                "type" => "out",
                "quantity" => $quantity,
                "balance" => $newBalance,
                "reference_type" => $referenceType,
                "reference_id" => $referenceId,
                "notes" => $notes,
                "user_id" => Auth::id(),
                "school_id" => $item->school_id,
            ]);

            $item->update(["current_stock" => $newBalance]);

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
                "item_id" => $item->id,
                "type" => "adjust",
                "quantity" => $quantity,
                "balance" => $actualStock,
                "reference_type" => "adjustment",
                "reference_id" => null,
                "notes" => $reason,
                "user_id" => Auth::id(),
                "school_id" => $item->school_id,
            ]);

            $item->update(["current_stock" => $actualStock]);

            return $transaction;
        });
    }

    public function submitGard(array $data): InventoryOrder
    {
        $schoolId = $data["school_id"];

        return DB::transaction(function () use ($data, $schoolId) {
            $orderId = $data["order_id"] ?? null;

            if ($orderId) {
                $order = InventoryOrder::findOrFail($orderId);
                $this->reverseOrderStockMovements($order);
                $order->items()->delete();
                $order->update([
                    "date" => $data["date"] ?? $order->date,
                    "notes" => $data["notes"] ?? $order->notes,
                ]);
            } else {
                $order = $this->createOrder([
                    "school_id" => $schoolId,
                    "type" => "gard",
                    "date" => $data["date"] ?? now(),
                    "notes" => $data["notes"] ?? null,
                ]);
            }

            foreach ($data["items"] as $itemData) {
                $item = InventoryItem::findOrFail($itemData["item_id"]);
                $diff = $itemData["actual_stock"] - $item->current_stock;

                InventoryOrderItem::create([
                    "inventory_order_id" => $order->id,
                    "itemable_id" => $item->id,
                    "itemable_type" => InventoryItem::class,
                    "quantity_in" => $diff > 0 ? $diff : 0,
                    "quantity_out" => $diff < 0 ? abs($diff) : 0,
                    "unit_price" => 0,
                    "total" => 0,
                ]);

                if ($diff != 0) {
                    $this->adjustStock(
                        $item,
                        $diff,
                        $itemData["actual_stock"],
                        "Gard #{$order->auto_number}",
                    );
                }
            }

            return $order->fresh(["items.itemable"]);
        });
    }

    public function getCurrentStock(InventoryItem $item): int|float
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
        return $item
            ->transactions()
            ->with("user")
            ->orderBy("created_at", "desc")
            ->get();
    }

    public function canStockOut(
        InventoryItem $item,
        int|float $quantity,
    ): bool {
        return $item->current_stock >= $quantity;
    }

    public function validateStockAvailability(
        InventoryItem $item,
        int|float $quantity,
    ): array {
        return [
            "available" => $this->canStockOut($item, $quantity),
            "available_qty" => $item->current_stock,
            "requested_qty" => $quantity,
        ];
    }

    public function getItems(?string $type = null, ?int $schoolId = null)
    {
        $query = InventoryItem::query();

        if ($type && $type !== "all") {
            $query->byType($type);
        }

        if ($schoolId) {
            $query->bySchool($schoolId);
        }

        return $query->active()->orderBy("name")->get();
    }

    public function reverseOrderStockMovements(InventoryOrder $order): void
    {
        foreach ($order->items as $orderItem) {
            $item = InventoryItem::find($orderItem->itemable_id);
            if (!$item) {
                continue;
            }

            if ($orderItem->quantity_in > 0) {
                $this->stockOut(
                    $item,
                    $orderItem->quantity_in,
                    "reversal",
                    $order->id,
                    "Reversal of Order #{$order->auto_number}",
                );
            }

            if ($orderItem->quantity_out > 0) {
                $this->stockIn(
                    $item,
                    $orderItem->quantity_out,
                    "reversal",
                    $order->id,
                    "Reversal of Order #{$order->auto_number}",
                );
            }
        }
    }
}
