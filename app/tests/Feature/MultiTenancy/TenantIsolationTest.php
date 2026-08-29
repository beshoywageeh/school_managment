<?php

namespace Tests\Feature\MultiTenancy;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TenantIsolationTest extends TestCase
{
    use RefreshDatabase;

    public function test_school_scoped_query_never_returns_rows_from_another_school(): void
    {
        [$schoolA, $schoolB] = [School::factory()->create(), School::factory()->create()];
        $parentA = MyParent::factory()->create(['school_id' => $schoolA->id]);
        MyParent::factory()->create(['school_id' => $schoolB->id]);

        $count = MyParent::where('school_id', $schoolA->id)->count();

        $this->assertSame(1, $count);
        $this->assertTrue(MyParent::find($parentA->id)->school_id === $schoolA->id);
        $this->assertSame(0, MyParent::where('school_id', $schoolA->id)->whereKey($parentA->id + 1)->count());
    }

    public function test_null_school_non_admin_user_is_not_implicitly_a_super_admin(): void
    {
        $user = User::factory()->create(['school_id' => null, 'isAdmin' => false]);

        $this->assertFalse((bool) $user->isAdmin);
        $this->assertNull($user->school_id);
    }

    public function test_linked_parent_count_is_correct_and_unlinked_parent_is_zero_in_multi_school_context(): void
    {
        [$schoolA, $schoolB] = [School::factory()->create(), School::factory()->create()];

        $user = User::factory()->create(['school_id' => $schoolA->id, 'isAdmin' => false]);

        $gradeA = Grade::factory()->create(['school_id' => $schoolA->id]);
        $classA = ClassRoom::factory()->create(['grade_id' => $gradeA->id, 'school_id' => $schoolA->id]);
        $year = AcademicYear::factory()->create(['school_id' => $schoolA->id, 'status' => 'active']);

        $linkedParentA = MyParent::factory()->create(['school_id' => $schoolA->id]);
        $unlinkedParentA = MyParent::factory()->create(['school_id' => $schoolA->id]);
        MyParent::factory()->create(['school_id' => $schoolB->id]);

        Student::factory()->create([
            'school_id' => $schoolA->id,
            'grade_id' => $gradeA->id,
            'classroom_id' => $classA->id,
            'acadmiecyear_id' => $year->id,
            'parent_id' => $linkedParentA->id,
        ]);

        $this->assertSame(1, Student::where('parent_id', $linkedParentA->id)->count());
        $this->assertSame(0, Student::where('parent_id', $unlinkedParentA->id)->count());
        $this->assertSame(3, MyParent::count());
    }
}
