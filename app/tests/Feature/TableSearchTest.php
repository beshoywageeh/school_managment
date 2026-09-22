<?php

namespace Tests\Feature;

use App\Models\ClassRoom;
use App\Models\ClassRoom2;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class TableSearchTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected School $school;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app['config']->set('laravellocalization.hideDefaultLocaleInURL', true);
        $this->app->setLocale('ar');
        session(['locale' => 'ar']);

        $this->school = School::factory()->create();
        $this->admin = User::factory()->create(['school_id' => $this->school->id]);
    }

    protected function givePermission(User $user, string ...$permissions): void
    {
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission, 'table' => 'test']);
            $role = Role::firstOrCreate(['name' => 'search-test-role-'.$permission]);
            $role->givePermissionTo($perm);
            $user->assignRole($role);
        }
        $user->load('roles');
        $this->app[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    public function test_filters_component_renders_search_form(): void
    {
        $html = $this->blade('<x-filters action="/x" reset="/x" placeholder="Enter-Name" />');

        $this->assertStringContainsString('<form method="GET" action="/x"', $html);
        $this->assertStringContainsString('name="search"', $html);
        $this->assertStringContainsString('Enter-Name', $html);
    }

    public function test_students_index_filters_by_student_name(): void
    {
        $this->givePermission($this->admin, 'Students-list');
        Role::firstOrCreate(['name' => 'Admin']);
        $this->admin->assignRole('Admin');
        $school = $this->school;
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $make = fn (string $name) => Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => MyParent::factory()->create(['school_id' => $school->id])->id,
            'name' => $name,
        ]);
        foreach (range(1, 11) as $i) {
            $make('SearchableStudentOne'.$i);
        }
        $make('UnrelatedStudentXYZ');

        $this->actingAs($this->admin);

        $response = $this->get(route('students.index', ['students' => 'SearchableStudentOne']));
        $response->assertOk();
        $response->assertSee('SearchableStudentOne');
        $response->assertDontSee('UnrelatedStudentXYZ');
        $response->assertSee('students=SearchableStudentOne');
    }

    public function test_graduated_students_filter_by_name(): void
    {
        $this->givePermission($this->admin, 'graduated-list', 'Students-list');
        $school = $this->school;
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $make = fn (string $name) => Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => MyParent::factory()->create(['school_id' => $school->id])->id,
            'name' => $name,
        ]);
        $match = $make('GradSearchOne');
        $other = $make('GradOtherTwo');
        $match->delete();
        $other->delete();

        $this->actingAs($this->admin);
        $response = $this->get(route('students.graduated', ['search' => 'GradSearchOne']));
        $response->assertOk();
        $response->assertSee('GradSearchOne');
        $response->assertDontSee('GradOtherTwo');
    }

    public function test_roles_index_filters_by_name(): void
    {
        $this->givePermission($this->admin, 'role-list');
        Role::create(['name' => 'zzsearchrole']);
        Role::create(['name' => 'zzotherrole']);

        $this->actingAs($this->admin);
        $response = $this->get(route('roles.index', ['search' => 'zzsearch']));
        $response->assertOk();
        $response->assertSee('zzsearchrole');
        $response->assertDontSee('zzotherrole');
    }

    public function test_classes_index_filters_by_title(): void
    {
        $this->givePermission($this->admin, 'classes-list');
        $school = $this->school;
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        $room = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        ClassRoom2::create(['title' => 'ClassMatchSeven', 'school_id' => $school->id, 'user_id' => $this->admin->id, 'grade_id' => $grade->id, 'class_room_id' => $room->id, 'tameen' => 0]);
        ClassRoom2::create(['title' => 'ClassOtherEight', 'school_id' => $school->id, 'user_id' => $this->admin->id, 'grade_id' => $grade->id, 'class_room_id' => $room->id, 'tameen' => 0]);

        $this->actingAs($this->admin);
        $response = $this->get(route('classes.index', ['search' => 'ClassMatchSeven']));
        $response->assertOk();
        $response->assertSee('ClassMatchSeven');
        $response->assertDontSee('ClassOtherEight');
    }

    public function test_class_rooms_index_filters_by_name(): void
    {
        $this->givePermission($this->admin, 'class_rooms-list');
        Role::firstOrCreate(['name' => 'Admin']);
        $this->admin->assignRole('Admin');
        $school = $this->school;
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => '1']);
        ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'name' => 'RoomAlphaNine', 'user_id' => $this->admin->id]);
        ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'name' => 'RoomBetaZero', 'user_id' => $this->admin->id]);

        $this->actingAs($this->admin);
        $response = $this->get(route('class-rooms.index', ['search' => 'RoomAlphaNine']));
        $response->assertOk();
        $response->assertSee('RoomAlphaNine');
        $response->assertDontSee('RoomBetaZero');
    }
}
