<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\SubmitGardRequest;
use App\Http\Requests\UpdateInventoryGardRequest;
use App\Http\Traits\SchoolTrait;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Services\Inventory\InventoryService;

class InventoryGardController extends Controller
{
    use SchoolTrait;

    public function __construct(protected InventoryService $inventoryService)
    {
        $this->middleware('permission:stocks-income_order|clothes-income_order|books_sheets-income_order', ['only' => ['create', 'store']]);
        $this->middleware('permission:stocks-inventory_edit|clothes-income_order-update|books_sheets-income_order-update', ['only' => ['edit', 'update']]);
    }

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

    public function update(UpdateInventoryGardRequest $request, $id)
    {
        $school = $this->getSchool();

        $validated = $request->validated();

        $order = InventoryOrder::findOrFail($id);

        $this->inventoryService->submitGard([
            'school_id' => $school->id,
            'order_id' => $id,
            'date' => $validated['date'] ?? null,
            'notes' => $validated['notes'] ?? null,
            'items' => $validated['items'],
        ]);

        return redirect()
            ->route('inventory.orders.show', $order)
            ->with('success', trans('general.success'));
    }
}
