<?php

namespace Tests\Feature;

use App\Models\FeeInvoice;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class FinancialTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);

        $this->admin = User::factory()->create();

        $role = Role::firstOrCreate(['name' => 'financial-test-role']);
        $permissions = [
            'fee_invoice-list',
            'fee_invoice-create',
            'fee_invoice-delete',
        ];
        foreach ($permissions as $name) {
            $role->givePermissionTo(Permission::firstOrCreate(['name' => $name]));
        }
        $this->admin->assignRole($role);
        $this->admin->load('roles');
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->actingAs($this->admin);
    }

    public function test_can_list_fee_invoices(): void
    {
        FeeInvoice::factory()->count(3)->create();

        $response = $this->get(route('fee-invoice.index'));

        $response->assertStatus(200);
    }

    public function test_fee_invoice_requires_student_id(): void
    {
        $response = $this->post(route('fee-invoice.store'), [
            'list_fees' => [],
        ]);

        $response->assertSessionHasErrors('list_fees');
    }

    public function test_can_show_fee_invoice(): void
    {
        $invoice = FeeInvoice::factory()->create();

        $response = $this->get(route('fee-invoice.show', $invoice->id));

        $response->assertStatus(200);
    }

    public function test_can_delete_fee_invoice(): void
    {
        $invoice = FeeInvoice::factory()->create();

        $response = $this->delete(route('fee-invoice.destroy', $invoice->id));

        $response->assertRedirect();
        $this->assertSoftDeleted('fee_invoices', [
            'id' => $invoice->id,
        ]);
    }
}
