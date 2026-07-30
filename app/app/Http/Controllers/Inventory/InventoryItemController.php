<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreItemRequest;
use App\Http\Requests\Inventory\UpdateItemRequest;
use App\Http\Traits\SchoolTrait;
use App\Models\ClassRoom;
use App\Models\Inventory\InventoryItem;
use App\Services\Inventory\InventoryService;

class InventoryItemController extends Controller
{
    use SchoolTrait;

    public function __construct(
        protected InventoryService $inventoryService,
    ) {
        $this->middleware('permission:stocks-index|clothes-index|books_sheets-index', ['only' => ['index', 'show']]);
        $this->middleware('permission:stocks-create|clothes-create|books_sheets-create', ['only' => ['store']]);
        $this->middleware('permission:stocks-update|clothes-update|books_sheets-update', ['only' => ['update']]);
        $this->middleware('permission:stocks-delete|clothes-delete|books_sheets-delete', ['only' => ['destroy']]);
    }

    public function index(string $type)
    {
        abort_if(
            ! in_array($type, ['clothe', 'stock', 'book', 'all']),
            404,
        );

        $school = $this->getSchool();
        $query = InventoryItem::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
            ->ByType($type)
            ->with([
                'grade' => function ($query) {
                    $query->select(['id', 'name']);
                },
            ]);

        if ($search = request('search')) {
            $query->where('name', 'like', "%{$search}%");
        }

        if ($category = request('category')) {
            $query->where('category', $category);
        }

        $sortBy = request('sort_by', 'name');
        $sortOrder = request('sort_order', 'asc');
        $allowedSorts = ['name', 'type', 'current_stock', 'sell_price', 'category'];
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortOrder === 'desc' ? 'desc' : 'asc');
        }

        $perPage = min((int) request('per_page', 10), 100);
        $items = $query->paginate($perPage);

        $classrooms = ClassRoom::when($this->schoolId(), fn ($q, $id) => $q->where('school_id', $id))
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
        $this->authorize('stocks-create', InventoryItem::class);
        $school = $this->getSchool();
        if ($request->classroom_id) {
            $gradeId = ClassRoom::findOrFail($request->classroom_id)
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
        $this->authorize('stocks-update', InventoryItem::class);
        $item = InventoryItem::findOrFail($id);

        $this->inventoryService->updateItem($item, $request->validated());

        return redirect()
            ->route('inventory.items.index', $item->type)
            ->with('success', trans('general.success'));
    }

    public function destroy($id)
    {
        $this->authorize('stocks-delete', InventoryItem::class);
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
