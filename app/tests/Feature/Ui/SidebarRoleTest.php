<?php

namespace Tests\Feature\Ui;

use App\Helpers\PermissionsHelper;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class SidebarRoleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    protected function createAdminUser(): User
    {
        $user = User::factory()->create(['isAdmin' => 1]);

        $role = Role::findOrCreate('Admin');
        $user->assignRole($role);

        return $user;
    }

    protected function createUserWithPermissions(array $permissionNames): User
    {
        $user = User::factory()->create(['isAdmin' => 0]);

        $role = Role::findOrCreate('test-role-'.uniqid());

        foreach ($permissionNames as $name) {
            $permission = Permission::findOrCreate($name);
            $role->givePermissionTo($permission);
        }

        $user->assignRole($role);

        return $user;
    }

    public function test_admin_sees_all_nav_groups(): void
    {
        $groups = PermissionsHelper::getNavGroups();
        $groupKeys = array_keys($groups);

        $this->assertContains('dashboard', $groupKeys);
        $this->assertContains('student_info', $groupKeys);
        $this->assertContains('employee_info', $groupKeys);
        $this->assertContains('accounting', $groupKeys);
        $this->assertContains('grades_setting', $groupKeys);

        foreach ($groups as $key => $group) {
            $expectedKeys = array_column($group['items'], 'route');
            foreach ($expectedKeys as $route) {
                $this->assertNotEmpty($route);
            }
        }
    }

    public function test_accountant_sees_only_financial_modules(): void
    {
        $user = $this->createUserWithPermissions([
            'academic_year-list', 'schoolfees-list', 'fee_invoice-list',
            'ReceiptPayment-list', 'except_fee-list', 'payment_parts-list',
            'exchange_bonds-list',
        ]);

        $this->actingAs($user);

        $visibleGroups = PermissionsHelper::getVisibleNavGroups();
        $visibleKeys = array_keys($visibleGroups);

        $this->assertContains('accounting', $visibleKeys);
        $this->assertContains('dashboard', $visibleKeys);

        $this->assertArrayNotHasKey('student_info', $visibleGroups);
        $this->assertArrayNotHasKey('employee_info', $visibleGroups);
        $this->assertArrayNotHasKey('grades_setting', $visibleGroups);
    }

    public function test_teacher_sees_only_teaching_modules(): void
    {
        $user = $this->createUserWithPermissions([
            'Students-list', 'parents-list',
            'grade-list', 'class_rooms-list', 'classes-list',
        ]);

        $this->actingAs($user);

        $visibleGroups = PermissionsHelper::getVisibleNavGroups();
        $visibleKeys = array_keys($visibleGroups);

        $this->assertContains('student_info', $visibleKeys);
        $this->assertContains('grades_setting', $visibleKeys);
        $this->assertContains('dashboard', $visibleKeys);

        $this->assertArrayNotHasKey('accounting', $visibleGroups);
        $this->assertArrayNotHasKey('security', $visibleGroups);
    }

    public function test_admin_era_hidden_for_non_admin(): void
    {
        $user = $this->createUserWithPermissions([]);

        $this->actingAs($user);

        $visibleGroups = PermissionsHelper::getVisibleNavGroups();

        $this->assertArrayNotHasKey('admin_era', $visibleGroups);
    }

    public function test_admin_era_visible_for_admin(): void
    {
        $user = $this->createAdminUser();

        $this->actingAs($user);

        $visibleGroups = PermissionsHelper::getVisibleNavGroups();

        $this->assertArrayHasKey('admin_era', $visibleGroups);
    }

    public function test_item_filtering_within_group(): void
    {
        $user = $this->createUserWithPermissions(['Students-list']);

        $this->actingAs($user);

        $visibleGroups = PermissionsHelper::getVisibleNavGroups();

        $this->assertArrayHasKey('student_info', $visibleGroups);
        $this->assertCount(1, $visibleGroups['student_info']['items']);
        $this->assertEquals('students.index', $visibleGroups['student_info']['items'][0]['route']);
    }

    public function test_sidebar_renders_without_errors_when_authenticated(): void
    {
        $user = User::factory()->create(['isAdmin' => 1]);

        $this->actingAs($user);

        $visibleGroups = PermissionsHelper::getVisibleNavGroups();

        $this->assertNotEmpty($visibleGroups);
        $this->assertArrayHasKey('dashboard', $visibleGroups);
        $this->assertArrayHasKey('admin_era', $visibleGroups);
    }
}
