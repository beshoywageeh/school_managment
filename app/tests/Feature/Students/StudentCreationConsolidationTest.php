<?php

namespace Tests\Feature\Students;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use App\Repositories\Eloquent\StudentRepository;
use App\Services\Student\StudentRegeister;
use App\Services\Student\StudentService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentCreationConsolidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_service_is_the_single_persistence_path(): void
    {
        $school = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id]);
        $this->actingAs($user);

        $grade = Grade::factory()->create(['school_id' => $school->id]);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $year = AcademicYear::factory()->create(['school_id' => $school->id]);
        $parent = MyParent::factory()->create(['school_id' => $school->id, 'religion' => 'muslim']);

        $request = [
            'name' => 'Omar Test',
            'birth_date' => '2012-05-10',
            'gender' => 'male',
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'address' => '1 Test St',
            'national_id' => '30101011234567',
            'student_status' => 'new',
            'religion' => 'muslim',
            'academic_year' => $year->id,
            'nationality' => 64,
        ];

        $student = app(StudentRepository::class)->storeStudent($request, $parent);

        $this->assertInstanceOf(Student::class, $student);
        $this->assertDatabaseHas('students', [
            'id' => $student->id,
            'name' => 'Omar Test',
            'grade_id' => $grade->id,
            'parent_id' => $parent->id,
            'school_id' => $school->id,
        ]);
    }

    public function test_student_service_persists_a_new_student(): void
    {
        $school = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id]);
        $this->actingAs($user);

        $grade = Grade::factory()->create(['school_id' => $school->id]);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id]);
        $year = AcademicYear::factory()->create(['school_id' => $school->id]);
        $parent = MyParent::factory()->create(['school_id' => $school->id, 'religion' => 'muslim']);

        $service = app(StudentService::class);

        $student = $service->createStudent([
            'code' => '000001',
            'name' => 'Sara Test',
            'birth_date' => '2013-08-01',
            'join_date' => '2019-09-01',
            'address' => '2 Test St',
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'school_id' => $school->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $user->id,
            'gender' => 'female',
            'religion' => 'muslim',
            'student_status' => 'new',
            'national_id' => '30303011234567',
            'nationality_id' => 64,
            'birth_at_begin' => null,
        ]);

        $this->assertInstanceOf(Student::class, $student);
        $this->assertSame($school->id, $student->school_id);
        $this->assertSame($parent->id, $student->parent_id);
    }

    public function test_student_register_service_offers_a_student_code(): void
    {
        $school = School::factory()->create();
        $user = User::factory()->create(['school_id' => $school->id]);
        $this->actingAs($user);

        $service = app(StudentRegeister::class);

        $this->assertIsInt($service->StudentCode());
    }
}
