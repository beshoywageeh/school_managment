<?php

namespace Tests\Feature\Imports;

use App\Models\School;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class ImportUploadValidationTest extends TestCase
{
    use RefreshDatabase;

    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();

        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $school = School::factory()->create();
        $this->user = User::factory()->create(['school_id' => $school->id]);
        $this->actingAs($this->user);

        $this->grantPermission('Students-Import_Excel');
        $this->grantPermission('employees-import_Excel');
        $this->grantPermission('Parents-import_Excel');
    }

    private function grantPermission(string $permission): void
    {
        $perm = Permission::firstOrCreate(['name' => $permission]);
        $role = Role::firstOrCreate(['name' => 'import-test-'.$permission]);
        $role->givePermissionTo($perm);
        $this->user->assignRole($role);
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function test_student_import_requires_an_excel_upload(): void
    {
        $this->post(route('students.import-excel'))
            ->assertSessionHasErrors('excel');
    }

    public function test_student_import_rejects_non_excel_file(): void
    {
        $file = UploadedFile::fake()->create('students.txt', 100, 'text/plain');

        $this->post(route('students.import-excel'), ['excel' => $file])
            ->assertSessionHasErrors('excel');
    }

    public function test_user_import_requires_an_excel_upload(): void
    {
        $this->post(route('employees.import-excel'))
            ->assertSessionHasErrors('excel');
    }

    public function test_user_import_rejects_non_excel_file(): void
    {
        $file = UploadedFile::fake()->create('employees.txt', 100, 'text/plain');

        $this->post(route('employees.import-excel'), ['excel' => $file])
            ->assertSessionHasErrors('excel');
    }

    public function test_parents_import_requires_an_excel_upload(): void
    {
        $this->post(route('parents.import-excel'))
            ->assertSessionHasErrors('file');
    }

    public function test_parents_import_rejects_non_excel_file(): void
    {
        $file = UploadedFile::fake()->create('parents.txt', 100, 'text/plain');

        $this->post(route('parents.import-excel'), ['file' => $file])
            ->assertSessionHasErrors('file');
    }
}
