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

        $query = InventoryOrder::where('school_id', $school->id)
            ->where('type', $type)
            ->with('items.itemable')
            ->withCount('items');

        if ($search = request('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('auto_number', 'like', "%{$search}%")
                    ->orWhere('notes', 'like', "%{$search}%");
            });
        }

        if ($status = request('status')) {
            $query->where('status', $status);
        }

        if ($studentId = request('student_id')) {
            $query->where('student_id', $studentId);
        }

        if ($fromDate = request('from_date')) {
            $query->whereDate('date', '>=', $fromDate);
        }

        if ($toDate = request('to_date')) {
            $query->whereDate('date', '<=', $toDate);
        }

        $sortBy = request('sort_by', 'created_at');
        $sortOrder = request('sort_order', 'desc');
        $allowedSorts = ['auto_number', 'date', 'total_amount', 'items_count', 'created_at'];
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortOrder === 'desc' ? 'desc' : 'asc');
        } else {
            $query->latest();
        }

        $perPage = min((int) request('per_page', 10), 100);
        $orders = $query->paginate($perPage);

        $students = Student::where('school_id', $school->id)->get();

        return view(
            'backend.inventory.orders.index',
            compact('orders', 'type', 'school', 'students'),
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

        $viewName = match ($type) {
            'inventory' => 'backend.inventory.orders.create_tawreed',
            'sales', 'purchases' => 'backend.inventory.orders.create_sarf',
        };

        return view(
            $viewName,
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

        $viewName = match ($order->type->value) {
            'inventory' => 'backend.inventory.orders.edit_tawreed',
            'sales', 'purchases' => 'backend.inventory.orders.edit_sarf',
        };

        return view(
            $viewName,
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
