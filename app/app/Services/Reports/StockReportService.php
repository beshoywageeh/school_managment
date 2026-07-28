<?php

namespace App\Services\Reports;

use App\Models\Inventory\InventoryItem;
use Illuminate\Database\Eloquent\Collection;

class StockReportService
{
    public function getStockItemReport(int $schoolId, int $itemId, string $type): array
    {
        $stock = InventoryItem::where('school_id', $schoolId)
            ->where('id', $itemId)
            ->where('type', $type)
            ->with('orders')
            ->first();

        return [
            'stock' => $stock,
            'totals' => $this->calculateTotals($stock),
        ];
    }

    public function getStockItemsByType(int $schoolId, string $type): Collection
    {
        return InventoryItem::where('school_id', $schoolId)
            ->where('type', $type)
            ->with('orders', 'classroom', 'grade')
            ->get();
    }

    public function calculateTotals(?InventoryItem $stocks): array
    {
        $previousstock = 0;
        $totals = [];

        foreach ($stocks->orders->sortBy('created_at') as $stock) {
            $previousstock += $stock->quantity_in - $stock->quantity_out;
            $totals[$stock->id] = [
                'stk' => $stock,
                'total' => $previousstock,
            ];
        }

        return $totals;
    }
}
