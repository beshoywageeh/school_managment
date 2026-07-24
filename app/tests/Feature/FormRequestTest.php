<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class FormRequestTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected User $unauthorizedUser;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);
        $this->admin = User::factory()->create();
        $this->unauthorizedUser = User::factory()->create();
    }

    protected function givePermission(User $user, string ...$permissions): void
    {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $roleName = 'form-test-role-'.$permission;
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    // ─── ClassRoomStoreRequest ───────────────────────────────────

    public function test_class_room_store_requires_classroom(): void
    {
        $this->givePermission($this->admin, 'class_rooms-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('class-rooms.store'), [
            'classroom' => [],
        ]);
        $response->assertSessionHasErrors('classroom');
    }

    public function test_class_room_store_rejects_invalid_grade(): void
    {
        $this->givePermission($this->admin, 'class_rooms-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('class-rooms.store'), [
            'classroom' => [
                ['class_name' => 'Test', 'grade_id' => 9999],
            ],
        ]);
        $response->assertSessionHasErrors('classroom.0.grade_id');
    }

    public function test_class_room_store_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->post(route('class-rooms.store'), [
            'classroom' => [
                ['class_name' => 'Test', 'grade_id' => 1],
            ],
        ]);
        $response->assertStatus(403);
    }

    // ─── ClassRoomUpdateRequest ──────────────────────────────────

    public function test_class_room_update_requires_id(): void
    {
        $this->givePermission($this->admin, 'class_rooms-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('class-rooms.update'), [
            'class_name' => 'Test',
            'grade_name' => 1,
        ]);
        $response->assertSessionHasErrors('id');
    }

    public function test_class_room_update_rejects_invalid_id(): void
    {
        $this->givePermission($this->admin, 'class_rooms-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('class-rooms.update'), [
            'id' => 9999,
            'class_name' => 'Test',
            'grade_name' => 1,
        ]);
        $response->assertSessionHasErrors('id');
    }

    // ─── ClassStoreRequest ───────────────────────────────────────

    public function test_class_store_requires_classroom(): void
    {
        $this->givePermission($this->admin, 'classes-create', 'Classes-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('classes.store'), [
            'classroom' => [],
        ]);
        $response->assertSessionHasErrors('classroom');
    }

    public function test_class_store_rejects_invalid_class_id(): void
    {
        $this->givePermission($this->admin, 'classes-create', 'Classes-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('classes.store'), [
            'classroom' => [
                ['class_name' => 'Test', 'class_id' => 9999],
            ],
        ]);
        $response->assertSessionHasErrors('classroom.0.class_id');
    }

    public function test_class_store_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->post(route('classes.store'), [
            'classroom' => [
                ['class_name' => 'Test', 'class_id' => 1],
            ],
        ]);
        $response->assertStatus(403);
    }

    // ─── ClassUpdateRequest ──────────────────────────────────────

    public function test_class_update_requires_id(): void
    {
        $this->givePermission($this->admin, 'classes-update', 'Classes-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('classes.update', 1), [
            'class_name' => 'Test',
            'grade_name' => 1,
        ]);
        $response->assertSessionHasErrors('id');
    }

    public function test_class_update_rejects_invalid_id(): void
    {
        $this->givePermission($this->admin, 'classes-update', 'Classes-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('classes.update', 1), [
            'id' => 9999,
            'class_name' => 'Test',
            'grade_name' => 1,
        ]);
        $response->assertSessionHasErrors('id');
    }

    // ─── ReceiptPaymentStoreRequest ──────────────────────────────

    public function test_receipt_payment_store_requires_student_id(): void
    {
        $this->givePermission($this->admin, 'ReceiptPayment-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('receipt-payment.store'), [
            'type' => 'fee_invoice',
        ]);
        $response->assertSessionHasErrors('student_id');
    }

    public function test_receipt_payment_store_requires_valid_type(): void
    {
        $this->givePermission($this->admin, 'ReceiptPayment-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('receipt-payment.store'), [
            'student_id' => 1,
            'type' => 'invalid',
        ]);
        $response->assertSessionHasErrors('type');
    }

    // ─── ReceiptPaymentUpdateRequest ─────────────────────────────

    public function test_receipt_payment_update_requires_id(): void
    {
        $this->givePermission($this->admin, 'ReceiptPayment-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('receipt-payment.update', 1), [
            'student_id' => 1,
            'amount' => 100,
        ]);
        $response->assertSessionHasErrors('id');
    }

    // ─── ExceptionFeeStoreRequest ────────────────────────────────

    public function test_exception_fee_store_requires_student_id(): void
    {
        $this->givePermission($this->admin, 'except_fee-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('except-fee.store'), [
            'fee_id' => 1,
            'amount' => 100,
        ]);
        $response->assertSessionHasErrors('student_id');
    }

    public function test_exception_fee_store_requires_amount(): void
    {
        $this->givePermission($this->admin, 'except_fee-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('except-fee.store'), [
            'student_id' => 1,
            'fee_id' => 1,
        ]);
        $response->assertSessionHasErrors('amount');
    }

    public function test_exception_fee_store_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->post(route('except-fee.store'), [
            'student_id' => 1,
            'fee_id' => 1,
            'amount' => 100,
        ]);
        $response->assertStatus(403);
    }

    // ─── ExceptionFeeUpdateRequest ───────────────────────────────

    public function test_exception_fee_update_requires_id(): void
    {
        $this->givePermission($this->admin, 'except_fee-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('except-fee.update', 1), [
            'student_id' => 1,
            'amount' => 100,
        ]);
        $response->assertSessionHasErrors('id');
    }

    // ─── UserStoreRequest ────────────────────────────────────────

    public function test_user_store_requires_name(): void
    {
        $this->givePermission($this->admin, 'employees-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('employees.store'), []);
        $response->assertSessionHasErrors('name');
    }

    public function test_user_store_requires_valid_phone(): void
    {
        $this->givePermission($this->admin, 'employees-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('employees.store'), [
            'name' => 'Test User',
            'phone' => '123',
        ]);
        $response->assertSessionHasErrors('phone');
    }

    public function test_user_store_requires_national_id(): void
    {
        $this->givePermission($this->admin, 'employees-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('employees.store'), [
            'name' => 'Test User',
            'phone' => '01234567890',
        ]);
        $response->assertSessionHasErrors('national_id');
    }

    public function test_user_store_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->post(route('employees.store'), [
            'name' => 'Test User',
        ]);
        $response->assertStatus(403);
    }

    // ─── UserUpdateRequest ───────────────────────────────────────

    public function test_user_update_requires_id(): void
    {
        $this->givePermission($this->admin, 'employees-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('employees.update', 1), []);
        $response->assertSessionHasErrors('id');
    }

    // ─── RoleStoreRequest ────────────────────────────────────────

    public function test_role_store_requires_name(): void
    {
        $this->givePermission($this->admin, 'role-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('roles.store'), [
            'permission' => ['test'],
        ]);
        $response->assertSessionHasErrors('name');
    }

    public function test_role_store_requires_permission(): void
    {
        $this->givePermission($this->admin, 'role-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('roles.store'), [
            'name' => 'test-role',
        ]);
        $response->assertSessionHasErrors('permission');
    }

    public function test_role_store_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->post(route('roles.store'), [
            'name' => 'test-role',
            'permission' => ['test'],
        ]);
        $response->assertStatus(403);
    }

    // ─── RoleUpdateRequest ───────────────────────────────────────

    public function test_role_update_requires_permission(): void
    {
        $this->givePermission($this->admin, 'role-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('roles.update', 1), [
            'name' => 'test-role',
        ]);
        $response->assertSessionHasErrors('permission');
    }

    // ─── JobStoreRequest ─────────────────────────────────────────

    public function test_job_store_requires_job_name(): void
    {
        $this->givePermission($this->admin, 'jobs-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('jobs.store'), []);
        $response->assertSessionHasErrors('job_name');
    }

    public function test_job_store_requires_worker_type(): void
    {
        $this->givePermission($this->admin, 'jobs-create');
        $this->actingAs($this->admin);
        $response = $this->post(route('jobs.store'), [
            'job_name' => 'Teacher',
        ]);
        $response->assertSessionHasErrors('worker_type');
    }

    public function test_job_store_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $response = $this->post(route('jobs.store'), [
            'job_name' => 'Teacher',
            'worker_type' => 1,
        ]);
        $response->assertStatus(403);
    }

    // ─── JobUpdateRequest ────────────────────────────────────────

    public function test_job_update_requires_id(): void
    {
        $this->givePermission($this->admin, 'jobs-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('jobs.update', 1), [
            'job_name' => 'Teacher',
            'worker_type' => 1,
        ]);
        $response->assertSessionHasErrors('id');
    }

    public function test_job_update_rejects_invalid_id(): void
    {
        $this->givePermission($this->admin, 'jobs-edit');
        $this->actingAs($this->admin);
        $response = $this->put(route('jobs.update', 1), [
            'id' => 9999,
            'job_name' => 'Teacher',
            'worker_type' => 1,
        ]);
        $response->assertSessionHasErrors('id');
    }
}
