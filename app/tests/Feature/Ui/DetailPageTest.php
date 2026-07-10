<?php

namespace Tests\Feature\Ui;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class DetailPageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_detail_header_component_renders(): void
    {
        $view = $this->blade(
            '<x-ui.detail-header
                title="بنك الرياض"
                status="active"
                statusLabel="نشط"
                :balance="150000">
                <x-slot:actions>
                    <x-ui.button variant="secondary">تعديل</x-ui.button>
                </x-slot:actions>
            </x-ui.detail-header>'
        );

        $view->assertSee('بنك الرياض');
        $view->assertSee('نشط');
        $view->assertSee('150,000');
    }

    public function test_detail_page_example_exists(): void
    {
        $this->assertFileExists(resource_path('views/backend/ui-examples/detail/index.blade.php'));
    }

    public function test_detail_page_uses_xui_components(): void
    {
        $content = file_get_contents(resource_path('views/backend/ui-examples/detail/index.blade.php'));

        $this->assertStringContainsString('x-ui.detail-header', $content);
        $this->assertStringContainsString('x-ui.tabs', $content);
        $this->assertStringContainsString('x-ui.status-badge', $content);
        $this->assertStringContainsString('x-ui.data-table', $content);
        $this->assertStringContainsString('x-ui.button', $content);
    }

    public function test_detail_header_shows_admin_actions(): void
    {
        $view = $this->blade(
            '<x-ui.detail-header
                title="بنك الرياض"
                status="active"
                statusLabel="نشط">
                <x-slot:actions>
                    <x-ui.button variant="secondary">تعديل</x-ui.button>
                    <x-ui.button variant="danger">حذف</x-ui.button>
                </x-slot:actions>
            </x-ui.detail-header>'
        );

        $view->assertSee('تعديل');
        $view->assertSee('حذف');
    }

    public function test_detail_header_shows_limited_actions_for_non_admin(): void
    {
        $view = $this->blade(
            '<x-ui.detail-header
                title="بنك الرياض"
                status="active"
                statusLabel="نشط">
                <x-slot:actions>
                    <x-ui.button variant="secondary">تعديل</x-ui.button>
                </x-slot:actions>
            </x-ui.detail-header>'
        );

        $view->assertSee('تعديل');
        $view->assertDontSee('حذف');
    }

    public function test_inline_actions_respects_permission_gating(): void
    {
        $deletePermission = Permission::findOrCreate('delete-users');

        $admin = User::factory()->create(['isAdmin' => true]);
        $role = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $role->givePermissionTo($deletePermission);
        $admin->assignRole($role);

        $teacher = User::factory()->create(['isAdmin' => false]);
        $teacherRole = Role::create(['name' => 'teacher', 'guard_name' => 'web']);
        $teacher->assignRole($teacherRole);

        $actionsHtml = '<x-ui.inline-actions
            :actions="[
                [\'action\' => \'edit\', \'label\' => \'تعديل\', \'permission\' => null],
                [\'action\' => \'delete\', \'label\' => \'حذف\', \'permission\' => \'delete-users\', \'variant\' => \'danger\'],
            ]"
            :rowId="1" />';

        $this->actingAs($admin);
        $viewAdmin = $this->blade($actionsHtml);
        $viewAdmin->assertSee('تعديل');
        $viewAdmin->assertSee('حذف');

        $this->actingAs($teacher);
        $viewTeacher = $this->blade($actionsHtml);
        $viewTeacher->assertSee('تعديل');
        $viewTeacher->assertDontSee('حذف');
    }
}
