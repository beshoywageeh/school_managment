<?php

namespace Tests\Feature\MultiTenancy;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use App\Services\DashboardService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardParentCountTest extends TestCase
{
    use RefreshDatabase;

    public function test_non_admin_parent_count_reflects_linked_grades_without_missing_column_error(): void
    {
        $school = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id, 'isAdmin' => false]);

        $gradeA = Grade::factory()->create(['school_id' => $school->id]);
        $gradeB = Grade::factory()->create(['school_id' => $school->id]);

        $classA = ClassRoom::factory()->create(['grade_id' => $gradeA->id, 'school_id' => $school->id]);
        $year = AcademicYear::factory()->create(['school_id' => $school->id, 'status' => 'active']);

        $linkedParent = MyParent::factory()->create(['school_id' => $school->id]);
        Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $gradeA->id,
            'classroom_id' => $classA->id,
            'acadmiecyear_id' => $year->id,
            'parent_id' => $linkedParent->id,
        ]);

        $otherParent = MyParent::factory()->create(['school_id' => $school->id]);
        Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $gradeB->id,
            'classroom_id' => $classA->id,
            'acadmiecyear_id' => $year->id,
            'parent_id' => $otherParent->id,
        ]);

        $user->grades()->attach($gradeA->id, ['school_id' => $school->id]);

        [$studentCount, $parentCount] = app(DashboardService::class)
            ->getUserRoleCounts($user->id, $school->id, false);

        $this->assertSame(1, $studentCount);
        $this->assertSame(1, $parentCount);
    }
}
