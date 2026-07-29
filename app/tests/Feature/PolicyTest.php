<?php

namespace Tests\Feature;

use App\Models\ClassRoom;
use App\Models\ClassRoom2 as classes;
use App\Models\Grade;
use App\Models\Inventory\InventoryItem;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class PolicyTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected User $unauthorizedUser;

    protected School $school;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);
        $this->school = School::factory()->create();
        $this->admin = User::factory()->create(['school_id' => $this->school->id]);
        $this->unauthorizedUser = User::factory()->create(['school_id' => $this->school->id]);
    }

    protected function givePermission(User $user, string ...$permissions): void
    {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $roleName = 'test-role-'.$permission;
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    protected function giveRole(User $user, string $permission): void
    {
        $this->givePermission($user, $permission);
    }

    // ─── Student Policy ──────────────────────────────────────────

    public function test_student_view_authorized(): void
    {
        $this->givePermission($this->admin, 'Students-list');
        $this->actingAs($this->admin);
        $this->get(route('students.index'))->assertStatus(200);
    }

    public function test_student_view_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('students.index'))->assertStatus(403);
    }

    public function test_student_create_authorized(): void
    {
        $this->givePermission($this->admin, 'Students-create');
        $this->actingAs($this->admin);
        $this->get(route('students.create'))->assertStatus(200);
    }

    public function test_student_create_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('students.create'))->assertStatus(403);
    }

    public function test_student_delete_authorized(): void
    {
        $this->givePermission($this->admin, 'Students-delete', 'Students-graduated');
        $student = Student::factory()->create(['school_id' => $this->school->id]);
        $this->actingAs($this->admin);
        $this->delete(route('students.destroy', $student->id))->assertRedirect();
    }

    public function test_student_delete_unauthorized(): void
    {
        $student = Student::factory()->create(['school_id' => $this->school->id]);
        $this->actingAs($this->unauthorizedUser);
        $this->delete(route('students.destroy', $student->id))->assertStatus(403);
    }

    // ─── FeeInvoice Policy ───────────────────────────────────────

    public function test_fee_invoice_view_authorized(): void
    {
        $this->givePermission($this->admin, 'fee_invoice-list');
        $this->actingAs($this->admin);
        $this->get(route('fee-invoice.index'))->assertStatus(200);
    }

    public function test_fee_invoice_view_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('fee-invoice.index'))->assertStatus(403);
    }

    // ─── User (Employee) Policy ──────────────────────────────────

    public function test_user_view_authorized(): void
    {
        $this->givePermission($this->admin, 'employees-list');
        $this->actingAs($this->admin);
        $this->get(route('employees.index'))->assertStatus(200);
    }

    public function test_user_view_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('employees.index'))->assertStatus(403);
    }

    public function test_user_create_authorized(): void
    {
        $this->givePermission($this->admin, 'employees-create');
        $this->actingAs($this->admin);
        $this->get(route('employees.create'))->assertStatus(200);
    }

    public function test_user_create_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('employees.create'))->assertStatus(403);
    }

    public function test_user_delete_authorized(): void
    {
        $this->givePermission($this->admin, 'employees-delete');
        $user = User::factory()->create(['school_id' => $this->school->id]);
        $this->actingAs($this->admin);
        $this->delete(route('employees.destroy', $user->id))->assertRedirect();
    }

    public function test_user_delete_unauthorized(): void
    {
        $user = User::factory()->create(['school_id' => $this->school->id]);
        $this->actingAs($this->unauthorizedUser);
        $this->delete(route('employees.destroy', $user->id))->assertStatus(403);
    }

    // ─── InventoryItem Policy ────────────────────────────────────

    public function test_inventory_item_view_authorized(): void
    {
        $this->givePermission($this->admin, 'stocks-index');
        $this->actingAs($this->admin);
        $this->get(route('inventory.items.index', 'stock'))->assertStatus(200);
    }

    public function test_inventory_item_view_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('inventory.items.index', 'stock'))->assertStatus(403);
    }

    public function test_inventory_item_delete_authorized(): void
    {
        $this->givePermission($this->admin, 'stocks-delete');
        $grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $this->actingAs($this->admin);
        $item = InventoryItem::create([
            'type' => 'stock',
            'name' => 'Test Delete Item',
            'unit' => 'piece',
            'current_stock' => 100,
            'min_stock' => 10,
            'max_stock' => 500,
            'cost_price' => 10.00,
            'sell_price' => 20.00,
            'is_active' => true,
            'grade_id' => $grade->id,
            'user_id' => $this->admin->id,
        ]);
        $this->delete(route('inventory.items.destroy', $item->id))->assertRedirect();
    }

    public function test_inventory_item_delete_unauthorized(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $this->actingAs($this->unauthorizedUser);
        $item = InventoryItem::create([
            'type' => 'stock',
            'name' => 'Test Delete Item',
            'unit' => 'piece',
            'current_stock' => 100,
            'min_stock' => 10,
            'max_stock' => 500,
            'cost_price' => 10.00,
            'sell_price' => 20.00,
            'is_active' => true,
            'grade_id' => $grade->id,
            'user_id' => $this->unauthorizedUser->id,
        ]);
        $this->delete(route('inventory.items.destroy', $item->id))->assertStatus(403);
    }

    // ─── InventoryOrder Policy ───────────────────────────────────

    public function test_inventory_order_view_authorized(): void
    {
        $this->givePermission($this->admin, 'stocks-inventory_order-index');
        $this->actingAs($this->admin);
        $this->get(route('inventory.orders.index', 'inventory'))->assertStatus(200);
    }

    public function test_inventory_order_view_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('inventory.orders.index', 'inventory'))->assertStatus(403);
    }

    // ─── Grade Policy ────────────────────────────────────────────

    public function test_grade_view_authorized(): void
    {
        $this->givePermission($this->admin, 'grade-list');
        $this->actingAs($this->admin);
        $this->get(route('grade.index'))->assertStatus(200);
    }

    public function test_grade_view_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('grade.index'))->assertStatus(403);
    }

    public function test_grade_create_authorized(): void
    {
        $this->givePermission($this->admin, 'grade-create');
        $this->actingAs($this->admin);
        $this->post(route('grade.store'), ['Grade_Name' => 'First Grade'])->assertStatus(302);
    }

    public function test_grade_create_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->post(route('grade.store'), ['Grade_Name' => 'First Grade'])->assertStatus(403);
    }

    public function test_grade_delete_authorized(): void
    {
        $this->givePermission($this->admin, 'grade-delete');
        $grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $this->actingAs($this->admin);
        $response = $this->delete(route('grade.destroy', $grade->id));
        $this->assertNotEquals(403, $response->getStatusCode(), 'Middleware should allow authorized user');
    }

    public function test_grade_delete_unauthorized(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $this->actingAs($this->unauthorizedUser);
        $this->delete(route('grade.destroy', $grade->id))->assertStatus(403);
    }

    // ─── Class Policy ────────────────────────────────────────────

    public function test_class_view_authorized(): void
    {
        $this->givePermission($this->admin, 'classes-list');
        $this->actingAs($this->admin);
        $response = $this->get(route('classes.index'));
        $this->assertNotEquals(403, $response->getStatusCode(), 'Middleware should allow authorized user');
    }

    public function test_class_view_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('classes.index'))->assertStatus(403);
    }

    public function test_class_delete_authorized(): void
    {
        $this->givePermission($this->admin, 'classes-delete');
        $grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->school->id,
        ]);
        $this->actingAs($this->admin);
        $class = classes::create([
            'title' => 'Test Class',
            'grade_id' => $grade->id,
            'class_room_id' => $classRoom->id,
            'user_id' => $this->admin->id,
        ]);
        $response = $this->delete(route('classes.destroy', $class->id));
        $this->assertNotEquals(403, $response->getStatusCode(), 'Middleware should allow authorized user');
    }

    public function test_class_delete_unauthorized(): void
    {
        $grade = Grade::factory()->create(['school_id' => $this->school->id]);
        $classRoom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $this->school->id,
        ]);
        $this->actingAs($this->unauthorizedUser);
        $class = classes::create([
            'title' => 'Test Class',
            'grade_id' => $grade->id,
            'class_room_id' => $classRoom->id,
            'user_id' => $this->unauthorizedUser->id,
        ]);
        $this->delete(route('classes.destroy', $class->id))->assertStatus(403);
    }

    // ─── Employee Policy ─────────────────────────────────────────

    public function test_employee_view_authorized(): void
    {
        $this->givePermission($this->admin, 'employees-list');
        $this->actingAs($this->admin);
        $this->get(route('employees.index'))->assertStatus(200);
    }

    public function test_employee_view_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('employees.index'))->assertStatus(403);
    }

    public function test_employee_create_authorized(): void
    {
        $this->givePermission($this->admin, 'employees-create');
        $this->actingAs($this->admin);
        $this->get(route('employees.create'))->assertStatus(200);
    }

    public function test_employee_create_unauthorized(): void
    {
        $this->actingAs($this->unauthorizedUser);
        $this->get(route('employees.create'))->assertStatus(403);
    }
}
