<?php

namespace App\Services\Reports;

use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrderItem;
use Illuminate\Database\Eloquent\Collection;

class StockReportService
{
    /**
     * Resolve a single inventory item owned by the school and its running
     * per-order totals. Unknown/foreign items abort with 404 (D-04) so
     * controllers never render a blank or null-guarded report.
     *
     * @return array{
     *   stock: InventoryItem,
     *   totals: array<int, array{stk: InventoryOrderItem, total: float|int}>,
     * }
     */
    public function getStockItemReport(int $schoolId, int $itemId, string $type): array
    {
        $stock = InventoryItem::where('school_id', $schoolId)
            ->where('id', $itemId)
            ->where('type', $type)
            ->with('orders.order')
            ->first();

        abort_unless($stock instanceof InventoryItem, 404);

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

    /**
     * @return array<int, array{stk: InventoryOrderItem, total: float|int}>
     */
    public function calculateTotals(InventoryItem $stocks): array
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
