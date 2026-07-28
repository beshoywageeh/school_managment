<?php

namespace App\Services\Inventory;

use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\Inventory\InventoryTransaction;

class InventoryService
{
    public function __construct(
        protected InventoryItemService $itemService,
        protected InventoryOrderService $orderService,
        protected InventoryTransactionService $transactionService,
        protected InventoryGardService $gardService,
    ) {}

    public function addItem(array $data): InventoryItem
    {
        return $this->itemService->addItem($data);
    }

    public function updateItem(InventoryItem $item, array $data): InventoryItem
    {
        return $this->itemService->updateItem($item, $data);
    }

    public function deleteItem(InventoryItem $item): bool
    {
        return $this->itemService->deleteItem($item);
    }

    public function getItems(?string $type = null, ?int $schoolId = null)
    {
        return $this->itemService->getItems($type, $schoolId);
    }

    public function getLowStockItems(int $schoolId)
    {
        return $this->itemService->getLowStockItems($schoolId);
    }

    public function getCurrentStock(InventoryItem $item): int|float
    {
        return $this->itemService->getCurrentStock($item);
    }

    public function generateOrderNumber(int $schoolId, string $type): string
    {
        return $this->orderService->generateOrderNumber($schoolId, $type);
    }

    public function createOrder(array $data): InventoryOrder
    {
        return $this->orderService->createOrder($data);
    }

    public function createOrderItems(InventoryOrder $order, array $items): void
    {
        $this->orderService->createOrderItems($order, $items);
    }

    public function updateOrder(InventoryOrder $order, array $data): InventoryOrder
    {
        return $this->orderService->updateOrder($order, $data);
    }

    public function deleteOrder(InventoryOrder $order): bool
    {
        return $this->orderService->deleteOrder($order);
    }

    public function payOrder(InventoryOrder $order): InventoryOrder
    {
        return $this->orderService->payOrder($order);
    }

    public function reverseOrderStockMovements(InventoryOrder $order): void
    {
        $this->orderService->reverseOrderStockMovements($order);
    }

    public function submitGard(array $data): InventoryOrder
    {
        return $this->gardService->submitGard($data);
    }

    public function stockIn(
        InventoryItem $item,
        int|float $quantity,
        string $referenceType = 'order',
        ?int $referenceId = null,
        string $notes = '',
    ): InventoryTransaction {
        return $this->transactionService->stockIn(
            $item, $quantity, $referenceType, $referenceId, $notes,
        );
    }

    public function stockOut(
        InventoryItem $item,
        int|float $quantity,
        string $referenceType = 'order',
        ?int $referenceId = null,
        string $notes = '',
    ): ?InventoryTransaction {
        return $this->transactionService->stockOut(
            $item, $quantity, $referenceType, $referenceId, $notes,
        );
    }

    public function adjustStock(
        InventoryItem $item,
        int|float $quantity,
        int|float $actualStock,
        string $reason,
    ): InventoryTransaction {
        return $this->transactionService->adjustStock(
            $item, $quantity, $actualStock, $reason,
        );
    }

    public function getTransactionHistory(InventoryItem $item)
    {
        return $this->transactionService->getTransactionHistory($item);
    }

    public function canStockOut(InventoryItem $item, int|float $quantity): bool
    {
        return $this->transactionService->canStockOut($item, $quantity);
    }

    public function validateStockAvailability(InventoryItem $item, int|float $quantity): array
    {
        return $this->transactionService->validateStockAvailability($item, $quantity);
    }
}
