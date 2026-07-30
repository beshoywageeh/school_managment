<?php

namespace App\Services\Inventory;

use App\Models\Inventory\InventoryOrder;

class InventoryOrderQueryService
{
    public function getOrders(?int $schoolId, ?string $type = null, array $filters = [])
    {
        $query = InventoryOrder::when($schoolId, fn ($q) => $q->where('school_id', $schoolId));

        if ($type && $type !== 'all') {
            $query->where('type', $type);
        }

        if (! empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (! empty($filters['student_id'])) {
            $query->where('student_id', $filters['student_id']);
        }

        if (! empty($filters['from_date'])) {
            $query->whereDate('date', '>=', $filters['from_date']);
        }

        if (! empty($filters['to_date'])) {
            $query->whereDate('date', '<=', $filters['to_date']);
        }

        return $query
            ->with(['items.itemable', 'student', 'school', 'user'])
            ->withCount('items')
            ->latest()
            ->paginate($filters['per_page'] ?? 10);
    }

    public function getOrderItems(InventoryOrder $order)
    {
        return $order->items()->with('itemable')->get();
    }
}
