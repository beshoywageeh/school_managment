<?php

namespace Tests\Unit\Models;

use App\Models\Fee_invoice;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\TestCase;

class FeeInvoiceTest extends TestCase
{
    protected Fee_invoice $feeInvoice;

    protected function setUp(): void
    {
        parent::setUp();
        $this->feeInvoice = new Fee_invoice;
    }

    public function test_fee_invoice_uses_specified_table_name(): void
    {
        $this->assertEquals('fee_invoices', $this->feeInvoice->getTable());
    }

    public function test_fee_invoice_has_empty_guarded(): void
    {
        $this->assertEmpty($this->feeInvoice->getGuarded());
    }

    public function test_fee_invoice_belongs_to_student(): void
    {
        $relation = $this->feeInvoice->students();

        $this->assertInstanceOf(BelongsTo::class, $relation);
    }

    public function test_fee_invoice_belongs_to_grade(): void
    {
        $relation = $this->feeInvoice->grades();

        $this->assertInstanceOf(BelongsTo::class, $relation);
    }

    public function test_fee_invoice_belongs_to_class(): void
    {
        $relation = $this->feeInvoice->classes();

        $this->assertInstanceOf(BelongsTo::class, $relation);
    }

    public function test_fee_invoice_belongs_to_school_fee(): void
    {
        $relation = $this->feeInvoice->fees();

        $this->assertInstanceOf(BelongsTo::class, $relation);
    }

    public function test_fee_invoice_belongs_to_academic_year(): void
    {
        $relation = $this->feeInvoice->acd_year();

        $this->assertInstanceOf(BelongsTo::class, $relation);
    }

    public function test_fee_invoice_uses_soft_deletes(): void
    {
        $this->assertTrue(in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses_recursive($this->feeInvoice)));
    }
}
