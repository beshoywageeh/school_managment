<?php

namespace Tests\Feature\Reports;

use App\Models\AcademicYear;
use App\Models\Inventory\InventoryItem;
use App\Models\School;
use App\Models\User;
use App\Services\Reports\PDFExportService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery\MockInterface;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

abstract class ReportTestCase extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Deterministic active-year flag regardless of the .env value.
        $this->app['config']->set('school.academic_year_status', 'active');
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
    }

    /**
     * Create a fresh school.
     */
    protected function school(): School
    {
        return School::factory()->create();
    }

    /**
     * Create a non-admin user bound to the given school.
     *
     * The user is only useful for "no permission" (403) assertions; grant
     * permissions via {@see userForSchool()} / {@see actingAsReportUser()}.
     */
    protected function createSchoolUser(School $school): User
    {
        return User::factory()->employee()->forSchool($school)->create();
    }

    /**
     * Create a school user with the given spatie permissions.
     *
     * Permissions are created on the fly (mirroring PermissionTableSeeder)
     * so the tests are independent of the seeded database.
     *
     * @param  list<string>  $permissions
     */
    protected function userForSchool(School $school, array $permissions = []): User
    {
        $user = $this->createSchoolUser($school);

        if ($permissions !== []) {
            $role = Role::firstOrCreate(['name' => 'report-test-role']);
            foreach ($permissions as $name) {
                $role->givePermissionTo(Permission::firstOrCreate(['name' => $name]));
            }
            $user->assignRole($role);
            $user->load('roles');
            app(PermissionRegistrar::class)->forgetCachedPermissions();
        }

        return $user;
    }

    /**
     * Act as a school user with the given permissions.
     *
     * @param  list<string>  $permissions
     */
    protected function actingAsReportUser(
        School $school,
        array $permissions = ['reports-view', 'reports-export'],
    ): User {
        $user = $this->userForSchool($school, $permissions);
        $this->actingAs($user);

        return $user;
    }

    /**
     * Create the school's active academic year.
     */
    protected function activeAcademicYear(School $school): AcademicYear
    {
        return AcademicYear::factory()->create([
            'school_id' => $school->id,
            'status' => 'active',
        ]);
    }

    /**
     * Create an inventory item owned by the given school.
     *
     * @param  'stock'|'clothe'|'book'  $type
     */
    protected function inventoryItem(School $school, string $type = 'stock', array $attributes = []): InventoryItem
    {
        return InventoryItem::factory()->create(array_merge([
            'school_id' => $school->id,
            'type' => $type,
            'opening_date' => now()->toDateString(),
        ], $attributes));
    }

    /**
     * Swap PDFExportService for a spy so tests can assert the rendered view,
     * orientation and the exact data array (D-01 contract) without rendering.
     */
    protected function mockPdfExport(): MockInterface
    {
        return $this->mock(PDFExportService::class);
    }
}
