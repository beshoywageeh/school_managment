<?php

namespace Tests\Feature\Imports;

use App\Models\School;
use App\Models\User;
use App\Services\Student\StudentImportService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class ImportOutcomeReportTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $school = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id]);

        $perm = Permission::firstOrCreate(['name' => 'Students-Import_Excel']);
        $role = Role::firstOrCreate(['name' => 'students-import-role']);
        $role->givePermissionTo($perm);
        $user->assignRole($role);

        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->actingAs($user);
    }

    public function test_student_import_flashes_the_services_outcome_and_not_a_hardcoded_success(): void
    {
        $this->mock(StudentImportService::class)
            ->shouldReceive('StudentImport')
            ->once()
            ->andReturn(['message' => 'Import started successfully, students will be added shortly.']);

        $file = UploadedFile::fake()->create('students.xlsx', 100, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        $this->post(route('students.import-excel'), ['excel' => $file])
            ->assertSessionHas(
                'success',
                'Import started successfully, students will be added shortly.',
            )
            ->assertSessionMissing('errors');
    }
}
