<?php

namespace App\Services;

use App\Http\Traits\LogsActivity;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Services\Inventory\InventoryService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentOrderService
{
    use LogsActivity;

    public function __construct(
        protected InventoryService $inventoryService,
    ) {}

    private function generateAutoNumber(
        string $modelClass,
        string $column = 'auto_number',
        int $pad = 6
    ): string {
        return DB::transaction(function () use ($modelClass, $column, $pad) {
            $last = $modelClass::lockForUpdate()->orderBy($column, 'desc')->first();

            $nextNumber = $last ? ((int) $last->$column + 1) : 1;

            return str_pad($nextNumber, $pad, '0', STR_PAD_LEFT);
        });
    }

    public function addStudentBookInvoice($student, ?Request $request = null): InventoryOrder
    {
        return DB::transaction(function () use ($student, $request) {
            $requestBookIds = $request?->book_id ?? [];
            $quantities = $request?->quantity ?? [];

            $books = InventoryItem::whereIn('id', $requestBookIds)->get()->keyBy('id');
            $total = 0;
            $itemsData = [];

            foreach ($requestBookIds as $key => $bookId) {
                $book = $books->get($bookId);
                $qty = (int) ($quantities[$key] ?? 0);

                if ($book && $qty > 0) {
                    $itemTotal = $qty * $book->sell_price;
                    $total += $itemTotal;

                    $itemsData[] = [
                        'itemable_id' => $bookId,
                        'itemable_type' => InventoryItem::class,
                        'quantity_out' => $qty,
                        'quantity_in' => 0,
                        'unit_price' => $book->sell_price,
                        'total' => $itemTotal,
                    ];
                }
            }

            $order = InventoryOrder::create([
                'auto_number' => $this->generateAutoNumber(InventoryOrder::class),
                'type' => 'sales',
                'date' => Carbon::today()->toDateString(),
                'student_id' => $student->id,
                'school_id' => auth()->user()->school_id,
                'user_id' => auth()->id(),
                'total_amount' => $total,
            ]);

            if (! empty($itemsData)) {
                $this->inventoryService->createOrderItems($order, $itemsData);
            }

            $this->logActivity(
                trans('log.parents.added_action'),
                trans('log.book_sheets_order.sarf_added', [
                    'number' => $order->auto_number,
                ]),
            );

            return $order;
        });
    }

    public function addStudentClotheInvoice($student, ?Request $request = null): InventoryOrder
    {
        return DB::transaction(function () use ($student, $request) {
            $requestClotheIds = $request?->clothe_id ?? [];
            $quantities = $request?->quantity ?? [];
            $useSetPrice = $request?->boolean('isset') ?? false;

            $clothes = InventoryItem::whereIn('id', $requestClotheIds)->get()->keyBy('id');
            $total = 0;
            $itemsData = [];

            foreach ($requestClotheIds as $key => $clotheId) {
                $clothe = $clothes->get($clotheId);
                $qty = (int) ($quantities[$key] ?? 0);

                if ($clothe && $qty > 0) {
                    $price = $useSetPrice ? $clothe->sales_price_set : $clothe->sell_price;
                    $itemTotal = $qty * $price;
                    $total += $itemTotal;

                    $itemsData[] = [
                        'itemable_id' => $clotheId,
                        'itemable_type' => InventoryItem::class,
                        'quantity_out' => $qty,
                        'quantity_in' => 0,
                        'unit_price' => $price,
                        'total' => $itemTotal,
                    ];
                }
            }

            $order = InventoryOrder::create([
                'auto_number' => $this->generateAutoNumber(InventoryOrder::class),
                'type' => 'sales',
                'date' => Carbon::today()->toDateString(),
                'total_amount' => $total,
                'student_id' => $student->id,
                'school_id' => auth()->user()->school_id,
                'user_id' => auth()->id(),
            ]);

            if (! empty($itemsData)) {
                $this->inventoryService->createOrderItems($order, $itemsData);
            }

            $this->logActivity(
                trans('log.clothes_order.out_order_added_action'),
                trans('log.clothes_order.out_order_added', [
                    'order_id' => $order->id,
                    'student_name' => $student->name,
                ]),
            );

            return $order;
        });
    }
}
