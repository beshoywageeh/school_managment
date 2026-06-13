<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreOrderRequest;
use App\Http\Requests\Inventory\UpdateOrderRequest;
use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\Student;
use App\Services\Inventory\InventoryService;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class InventoryOrderController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct(
        protected InventoryService $inventoryService,
    ) {}

    public function index(string $type): View
    {
        abort_if(
            ! in_array($type, ['inventory', 'sales', 'purchases', 'gard']),
            404,
        );
        $school = $this->getSchool();

        $orders = InventoryOrder::where('school_id', $school->id)
            ->where('type', $type)
            ->with('items.itemable')
            ->withCount('items')
            ->latest()
            ->paginate();

        return view(
            'backend.inventory.orders.index',
            compact('orders', 'type', 'school'),
        );
    }

    public function create(string $type): View
    {
        abort_if(
            ! in_array($type, ['inventory', 'sales', 'purchases']),
            404,
        );

        $school = $this->getSchool();
        $items = InventoryItem::where('school_id', $school->id)
            ->active()
            ->get();
        $students = Student::where('school_id', $school->id)->get();

        return view(
            'backend.inventory.orders.form',
            compact('type', 'items', 'students', 'school'),
        );
    }

    public function store(StoreOrderRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $order = $this->inventoryService->createOrder(
                $request->validated(),
            );
            $this->inventoryService->createOrderItems(
                $order,
                $request->validated()['items'],
            );

            return redirect()
                ->route('inventory.orders.show', $order)
                ->with('success', trans('general.success'));
        });
    }

    public function show($id): View
    {
        $order = InventoryOrder::with([
            'items.itemable',
            'user',
            'student',
        ])->findOrFail($id);

        return view('backend.inventory.orders.show', compact('order'));
    }

    public function edit($id): View
    {
        $order = InventoryOrder::with('items.itemable')->findOrFail($id);
        $school = $this->getSchool();
        $items = InventoryItem::where('school_id', $school->id)
            ->active()
            ->get();
        $students = Student::where('school_id', $school->id)->get();

        return view(
            'backend.inventory.orders.form',
            compact('order', 'items', 'students', 'school'),
        );
    }

    public function update(UpdateOrderRequest $request)
    {
        $order = InventoryOrder::findOrFail($request->input('order_id'));

        $this->inventoryService->updateOrder(
            $order,
            $request->validated(),
        );

        return redirect()
            ->route('inventory.orders.show', $order)
            ->with('success', trans('general.success'));
    }

    public function pay($id)
    {
        $order = InventoryOrder::findOrFail($id);

        $this->inventoryService->payOrder($order);

        return redirect()
            ->route('inventory.orders.show', $order)
            ->with('success', trans('general.success'));
    }

    public function destroy($id)
    {
        $order = InventoryOrder::findOrFail($id);

        try {
            $this->inventoryService->deleteOrder($order);

            return redirect()
                ->route('inventory.orders.index', $order->type)
                ->with('success', trans('general.success'));
        } catch (\Exception $e) {
            return redirect()
                ->route('inventory.orders.index', $order->type)
                ->with('error', $e->getMessage());
        }
    }
}
