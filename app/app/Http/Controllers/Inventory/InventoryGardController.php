<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\SubmitGardRequest;
use App\Http\Traits\SchoolTrait;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Services\Inventory\InventoryService;
use Illuminate\Http\Request;

class InventoryGardController extends Controller
{
    use SchoolTrait;

    public function __construct(protected InventoryService $inventoryService) {}

    public function create()
    {
        $school = $this->getSchool();
        $items = InventoryItem::where('school_id', $school->id)
            ->active()
            ->get();

        return view(
            'backend.inventory.orders.gard_create',
            compact('items', 'school'),
        );
    }

    public function store(SubmitGardRequest $request)
    {
        $school = $this->getSchool();

        $this->inventoryService->submitGard([
            ...$request->validated(),
            'school_id' => $school->id,
        ]);

        return redirect()
            ->route('inventory.orders.index', 'gard')
            ->with('success', trans('general.success'));
    }

    public function edit($id)
    {
        $school = $this->getSchool();
        $order = InventoryOrder::with('items.itemable')->findOrFail($id);
        $items = InventoryItem::where('school_id', $school->id)
            ->active()
            ->get();

        return view(
            'backend.inventory.orders.gard_edit',
            compact('items', 'school') + ['gard' => $order],
        );
    }

    public function update(Request $request)
    {
        $school = $this->getSchool();

        $validated = $request->validate([
            'order_id' => 'required|exists:inventory_orders,id',
            'date' => 'nullable|date',
            'notes' => 'nullable|string',
            'items' => 'required|array',
            'items.*.item_id' => 'required|exists:inventory_items,id',
            'items.*.actual_stock' => 'required|numeric|min:0',
        ]);

        $order = InventoryOrder::findOrFail($validated['order_id']);

        $this->inventoryService->submitGard([
            'school_id' => $school->id,
            'order_id' => $validated['order_id'] ?? null,
            'date' => $validated['date'] ?? null,
            'notes' => $validated['notes'] ?? null,
            'items' => $validated['items'],
        ]);

        return redirect()
            ->route('inventory.orders.show', $order)
            ->with('success', trans('general.success'));
    }
}
