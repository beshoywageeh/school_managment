<?php

namespace Tests\Feature\Reports;

use App\Enums\InventoryOrderType;
use App\Models\Inventory\InventoryItem;
use App\Models\Inventory\InventoryOrder;
use App\Models\Inventory\InventoryOrderItem;

class InventoryReportsTest extends ReportTestCase
{
    /**
     * @param  'stock'|'clothe'|'book'  $type
     */
    private function inventoryFixture($school, string $type): array
    {
        $item = $this->inventoryItem($school, $type);
        $order = InventoryOrder::factory()->create([
            'school_id' => $school->id,
            'type' => InventoryOrderType::PURCHASES,
            'date' => now()->toDateString(),
        ]);
        InventoryOrderItem::factory()->create([
            'inventory_order_id' => $order->id,
            'itemable_id' => $item->id,
            'itemable_type' => InventoryItem::class,
            'quantity_in' => 10,
            'quantity_out' => 0,
            'unit_price' => 50,
        ]);

        return compact('item', 'order');
    }

    public function test_stock_product_renders_running_totals_with_stocks_key(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->inventoryFixture($school, 'stock');

        $this->mockPdfExport()
            ->shouldReceive('PrintPDF')
            ->once()
            ->withArgs(function ($view, $type, $data) use ($fx) {
                return $view === 'backend.report.PDF.stock_product_view'
                    && $type === 'stream'
                    && isset($data['stock'], $data['stocks'])
                    && $data['stock']->id === $fx['item']->id
                    && isset($data['stocks'][$fx['order']->id])
                    && $data['stocks'][$fx['order']->id]['total'] == 10;
            });

        $this->post(route('report.stock'), ['stock' => $fx['item']->id])
            ->assertOk()
            ->assertSessionHasNoErrors();
    }

    public function test_clothe_stock_renders_with_total_key(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->inventoryFixture($school, 'clothe');

        $this->mockPdfExport()
            ->shouldReceive('PrintPDF')
            ->once()
            ->withArgs(function ($view, $data) use ($fx) {
                return $view === 'backend.report.PDF.clothe_stock'
                    && isset($data['stock'], $data['total'])
                    && $data['stock']->id === $fx['item']->id
                    && $data['total'][$fx['order']->id]['total'] == 10;
            });

        $this->post(route('report.clothes-stock'), ['stock' => $fx['item']->id])
            ->assertOk();
    }

    public function test_book_sheet_stock_renders_with_total_key(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->inventoryFixture($school, 'book');

        $this->mockPdfExport()
            ->shouldReceive('PrintPDF')
            ->once()
            ->withArgs(function ($view, $data) use ($fx) {
                return $view === 'backend.report.PDF.book_sheet_stock'
                    && isset($data['stock'], $data['total'])
                    && $data['stock']->id === $fx['item']->id;
            });

        $this->post(route('report.book-sheet-stock'), ['stock' => $fx['item']->id])
            ->assertOk();
    }

    public function test_stock_product_rejects_missing_stock_id(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->post(route('report.stock'), [])
            ->assertSessionHasErrors('stock');

        $this->post(route('report.stock'), ['stock' => 'abc'])
            ->assertSessionHasErrors('stock');
    }

    public function test_stock_product_returns_404_for_item_of_other_school(): void
    {
        $schoolA = $this->school();
        $schoolB = $this->school();
        $this->actingAsReportUser($schoolA);
        $foreignItem = $this->inventoryItem($schoolB, 'stock');

        $this->post(route('report.stock'), ['stock' => $foreignItem->id])
            ->assertNotFound();
    }

    public function test_stock_products_lists_all_stock_items(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $this->inventoryFixture($school, 'stock');

        $this->mockPdfExport()
            ->shouldReceive('PrintPDF')
            ->once()
            ->withArgs(function ($view, $data) {
                return $view === 'backend.report.PDF.stock_product'
                    && isset($data['stocks'])
                    && $data['stocks']->isNotEmpty();
            });

        $this->get(route('report.stock-product'))->assertOk();
    }

    public function test_clothes_stocks_lists_clothe_items_only(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $this->inventoryFixture($school, 'clothe');
        $this->inventoryFixture($school, 'stock');

        $this->mockPdfExport()
            ->shouldReceive('PrintPDF')
            ->once()
            ->withArgs(function ($view, $data) {
                return $view === 'backend.report.PDF.clothes_stocks'
                    && isset($data['clothes'])
                    && $data['clothes']->isNotEmpty()
                    && $data['clothes']->every(fn ($item) => $item->type === 'clothe');
            });

        $this->get(route('report.clothes-stocks'))->assertOk();
    }

    public function test_books_sheets_lists_book_items_only(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $this->inventoryFixture($school, 'book');
        $this->inventoryFixture($school, 'clothe');

        $this->mockPdfExport()
            ->shouldReceive('PrintPDF')
            ->once()
            ->withArgs(function ($view, $data) {
                return $view === 'backend.report.PDF.books_sheets_stocks'
                    && $data->isNotEmpty()
                    && $data->every(fn ($item) => $item->type === 'book');
            });

        $this->get(route('report.books-sheets'))->assertOk();
    }

    public function test_stock_product_redirects_when_no_items_exist(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->get(route('report.stock-product'))
            ->assertRedirect()
            ->assertSessionHas('info', trans('report.no_data_found'));
    }
}
