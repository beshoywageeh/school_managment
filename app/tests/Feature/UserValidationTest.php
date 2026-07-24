<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class UserValidationTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        $this->admin = User::factory()->create();
        $this->givePermission($this->admin, 'employees-create', 'employees-edit');
        $this->actingAs($this->admin);
    }

    protected function givePermission(User $user, string ...$permissions): void
    {
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $roleName = 'user-validation-role-'.$permission;
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    protected function validStoreData(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Test User',
            'phone' => '01234567890',
            'address' => 'Test Address',
            'birth_date' => '1990-01-01',
            'date_of_hiring' => '2024-01-01',
            'learning' => 'Bachelor',
            'religion' => 1,
            'gender' => 1,
            'type' => 1,
            'national_id' => '12345678901234',
        ], $overrides);
    }

    // ─── Store validation tests ──────────────────────────────────

    public function test_worker_type_is_validated_on_store(): void
    {
        $response = $this->post(route('employees.store'), $this->validStoreData([
            'worker_type' => 'not-a-number',
        ]));

        $response->assertSessionHasErrors('worker_type');
    }

    public function test_grade_year_is_validated_on_store(): void
    {
        $response = $this->post(route('employees.store'), $this->validStoreData([
            'grade_year' => 'invalid',
        ]));

        $response->assertSessionHasErrors('grade_year');
    }

    public function test_lesson_count_is_validated_on_store(): void
    {
        $response = $this->post(route('employees.store'), $this->validStoreData([
            'lesson_count' => 'not-a-number',
        ]));

        $response->assertSessionHasErrors('lesson_count');
    }

    public function test_national_id_expire_date_is_validated_on_store(): void
    {
        $response = $this->post(route('employees.store'), $this->validStoreData([
            'national_id_expire_date' => 'not-a-date',
        ]));

        $response->assertSessionHasErrors('national_id_expire_date');
    }

    public function test_contract_start_date_is_validated_on_store(): void
    {
        $response = $this->post(route('employees.store'), $this->validStoreData([
            'contract_start_date' => 'not-a-date',
        ]));

        $response->assertSessionHasErrors('contract_start_date');
    }

    public function test_insurance_number_is_required_numeric_digits(): void
    {
        $response = $this->post(route('employees.store'), $this->validStoreData([
            'insurance_number' => 'abc',
        ]));

        $response->assertSessionHasErrors('insurance_number');
    }

    public function test_insurance_number_valid_digits_passes(): void
    {
        $response = $this->post(route('employees.store'), $this->validStoreData([
            'insurance_number' => '1234567890',
        ]));

        $response->assertSessionHasNoErrors('insurance_number');
    }

    // ─── Update validation tests ─────────────────────────────────

    public function test_insurance_number_validates_on_update(): void
    {
        $user = User::factory()->create();

        $response = $this->put(route('employees.update', $user->id), [
            'id' => $user->id,
            'insurance_number' => 'not-valid',
        ]);

        $response->assertSessionHasErrors('insurance_number');
    }
}
