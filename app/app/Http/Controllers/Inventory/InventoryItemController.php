<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreItemRequest;
use App\Http\Requests\Inventory\UpdateItemRequest;
use App\Http\Traits\SchoolTrait;
use App\Models\class_room;
use App\Models\Inventory\InventoryItem;
use App\Services\Inventory\InventoryService;

class InventoryItemController extends Controller
{
    use SchoolTrait;

    public function __construct(
        protected InventoryService $inventoryService,
    ) {}

    public function index(string $type)
    {
        abort_if(
            ! in_array($type, ['clothe', 'stock', 'book', 'all']),
            404,
        );

        $school = $this->getSchool();
        $items = InventoryItem::where('school_id', $school->id)
            ->ByType($type)
            ->with([
                'grade' => function ($query) {
                    $query->select(['id', 'name']);
                },
            ])
            ->paginate(10);
        $classrooms = class_room::where('school_id', $school->id)
            ->with([
                'grade' => function ($query) {
                    $query->select(['id', 'name']);
                },
            ])
            ->get(['id', 'name', 'grade_id'])
            ->groupBy('grade.name');

        return view('backend.inventory.items.index', [
            'type' => $type,
            'items' => $items,
            'school' => $school,
            'classrooms' => $classrooms,
        ]);
    }

    public function show($id)
    {
        $school = $this->getSchool();
        $item = InventoryItem::with([
            'transactions',
            'grade',
            'classroom',
        ])->findOrFail($id);

        return view(
            'backend.inventory.items.show',
            compact('item', 'school'),
        );
    }

    public function store(StoreItemRequest $request)
    {
        $school = $this->getSchool();
        if ($request->classroom_id) {
            $gradeId = class_room::findOrFail($request->classroom_id)
                ->grade_id;
        }
        $this->inventoryService->addItem([
            ...$request->validated(),
            'school_id' => $school->id,
            'grade_id' => $gradeId ?? null,
        ]);

        return redirect()
            ->route('inventory.items.index', $request->type)
            ->with('success', trans('general.success'));
    }

    public function update(UpdateItemRequest $request, $id)
    {
        $item = InventoryItem::findOrFail($id);

        $this->inventoryService->updateItem($item, $request->validated());

        return redirect()
            ->route('inventory.items.index', $item->type)
            ->with('success', trans('general.success'));
    }

    public function destroy($id)
    {
        $item = InventoryItem::findOrFail($id);

        try {
            $this->inventoryService->deleteItem($item);

            return redirect()
                ->route('inventory.items.index', $item->type)
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()
                ->route('inventory.items.index', $item->type)
                ->with('error', $e->getMessage());
        }
    }
}
