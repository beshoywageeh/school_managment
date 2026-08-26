<?php

namespace Tests\Feature;

use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\School;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class SeederCoherenceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
    }

    public function test_seeded_users_grades_and_classrooms_share_one_school(): void
    {
        $this->seed(DatabaseSeeder::class);

        $schoolId = School::query()->min('id');

        $users = User::all();
        $this->assertTrue($users->count() > 0);
        $this->assertEquals(
            array_fill(0, $users->count(), $schoolId),
            $users->pluck('school_id')->all(),
            'All seeded users must belong to the same school as classrooms',
        );

        $grades = Grade::query()->get();
        $this->assertTrue($grades->count() > 0);
        $this->assertEquals(
            array_fill(0, $grades->count(), $schoolId),
            $grades->pluck('school_id')->all(),
        );

        $classrooms = ClassRoom::query()->get();
        $this->assertTrue($classrooms->count() > 0);
        $this->assertEquals(
            array_fill(0, $classrooms->count(), $schoolId),
            $classrooms->pluck('school_id')->all(),
        );
    }

    public function test_seeded_user_gets_classrooms_from_ajax_endpoint(): void
    {
        $this->seed(DatabaseSeeder::class);

        $schoolId = School::query()->min('id');
        $gradeId = Grade::query()->min('id');

        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $response = $this->actingAs(User::query()->first())
            ->getJson("/ajax/get-class-rooms/{$gradeId}");

        $response->assertOk();

        $classroomIds = collect($response->json())->pluck('id')->all();
        $expectedIds = ClassRoom::where('grade_id', $gradeId)->pluck('id')->all();

        $this->assertNotEmpty($expectedIds, 'Seeded school must have classrooms for its grades');
        $this->assertEqualsCanonicalizing($expectedIds, $classroomIds);
    }

    public function test_non_admin_attached_to_seeded_school_sees_only_that_schools_classrooms(): void
    {
        $this->seed(DatabaseSeeder::class);

        $schoolId = School::query()->min('id');

        $perm = Permission::firstOrCreate([
            'name' => 'Students-list',
            'guard_name' => 'web',
        ]);
        $role = Role::firstOrCreate(['name' => 'coherence-test-role', 'guard_name' => 'web']);
        $role->givePermissionTo($perm);
        $user = User::factory()->create(['school_id' => $schoolId, 'isAdmin' => false]);
        $user->assignRole($role);
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $gradeId = Grade::query()->where('school_id', $schoolId)->min('id');

        $response = $this->actingAs($user)
            ->getJson("/ajax/get-class-rooms/{$gradeId}");

        $response->assertOk();

        $expectedIds = ClassRoom::where('school_id', $schoolId)
            ->where('grade_id', $gradeId)
            ->pluck('id')
            ->all();

        $this->assertNotEmpty($expectedIds);
        $this->assertEqualsCanonicalizing($expectedIds, collect($response->json())->pluck('id')->all());
    }
}
