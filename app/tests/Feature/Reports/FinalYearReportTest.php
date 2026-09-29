<?php

namespace Tests\Feature\Reports;

use App\Models\ClassRoom;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\SchoolFee;
use App\Models\Student;

class FinalYearReportTest extends ReportTestCase
{
    public function test_final_year_renders_html_view_with_grouped_students(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $adminId = auth()->id();
        $year = $this->activeAcademicYear($school);
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'user_id' => $adminId]);
        $parent = MyParent::factory()->create(['school_id' => $school->id]);
        Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
        ]);

        $response = $this->post(route('report.final-year'), [
            'grade' => $grade->id,
            'classroom' => $classroom->id,
        ]);

        $response->assertOk();
        $response->assertViewIs('backend.report.PDF.FinalYear');
        $response->assertViewHas('Students_grouped');
        $response->assertViewHas('Students_grouped_sum');
        $response->assertViewHas('acadmic_year');
        $response->assertViewHas('school', fn ($value) => $value->id === $school->id);
    }

    public function test_final_year_renders_empty_groupings_without_error(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $this->activeAcademicYear($school);

        $response = $this->post(route('report.final-year'));

        $response->assertOk();
        $response->assertViewHas('Students_grouped');
    }

    public function test_final_year_validates_grade_and_classroom_filters(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->post(route('report.final-year'), [
            'grade' => 'abc',
            'classroom' => 'xyz',
        ])->assertSessionHasErrors(['grade', 'classroom']);
    }

    public function test_final_year_rejects_non_integer_inside_a_filter_list(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->post(route('report.final-year'), [
            'grade' => ['1', 'abc'],
            'classroom' => ['1', 'xyz'],
        ])->assertSessionHasErrors(['grade', 'classroom']);
    }

    public function test_final_year_accepts_multi_select_filter_lists(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $adminId = auth()->id();
        $year = $this->activeAcademicYear($school);

        $wanted = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $ignored = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $parent = MyParent::factory()->create(['school_id' => $school->id]);

        $wantedClassroom = ClassRoom::factory()->create([
            'grade_id' => $wanted->id,
            'school_id' => $school->id,
            'user_id' => $adminId,
        ]);

        $ignoredClassroom = ClassRoom::factory()->create([
            'grade_id' => $ignored->id,
            'school_id' => $school->id,
            'user_id' => $adminId,
        ]);

        $kept = Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $wanted->id,
            'classroom_id' => $wantedClassroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
        ]);

        $excluded = Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $ignored->id,
            'classroom_id' => $ignoredClassroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
        ]);

        $response = $this->post(route('report.final-year'), [
            'grade' => [$wanted->id, $ignored->id],
            'classroom' => [$wantedClassroom->id],
        ]);

        $response->assertOk();
        $response->assertSessionHasNoErrors();
        $response->assertViewHas(
            'grade',
            fn ($grades) => $grades->pluck('id')->sort()->values()->all()
                === collect([$wanted->id, $ignored->id])->sort()->values()->all(),
        );
        $response->assertViewHas(
            'classroom',
            fn ($classrooms) => $classrooms->pluck('id')->all() === [$wantedClassroom->id],
        );
        $response->assertViewHas(
            'Students_grouped_sum',
            fn (int $sum) => $sum === 1,
        );

        $this->assertNotNull($kept->fresh());
        $this->assertNotNull($excluded->fresh());
    }

    public function test_final_year_treats_zero_sentinel_as_no_filter(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $adminId = auth()->id();
        $year = $this->activeAcademicYear($school);
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $classroom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $school->id,
            'user_id' => $adminId,
        ]);
        $parent = MyParent::factory()->create(['school_id' => $school->id]);

        Student::factory()->count(2)->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
        ]);

        $response = $this->post(route('report.final-year'), [
            'grade' => ['0'],
            'classroom' => ['0'],
        ]);

        $response->assertOk();
        $response->assertSessionHasNoErrors();
        $response->assertViewHas('grade', fn ($grades) => $grades->isEmpty());
        $response->assertViewHas('classroom', fn ($classrooms) => $classrooms->isEmpty());
        $response->assertViewHas('Students_grouped_sum', fn (int $sum) => $sum === 2);
    }

    public function test_final_year_sums_paid_invoice_amounts_only(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $adminId = auth()->id();
        $year = $this->activeAcademicYear($school);
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $classroom = ClassRoom::factory()->create([
            'grade_id' => $grade->id,
            'school_id' => $school->id,
            'user_id' => $adminId,
        ]);
        $parent = MyParent::factory()->create(['school_id' => $school->id]);
        $student = Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
        ]);

        foreach ([['paid', 1500], ['paid', 500], ['unpaid', 900]] as [$status, $amount]) {
            $fee = SchoolFee::factory()->create([
                'school_id' => $school->id,
                'grade_id' => $grade->id,
                'classroom_id' => $classroom->id,
                'academic_year_id' => $year->id,
                'user_id' => $adminId,
                'amount' => $amount,
            ]);

            FeeInvoice::factory()->create([
                'school_id' => $school->id,
                'student_id' => $student->id,
                'grade_id' => $grade->id,
                'classroom_id' => $classroom->id,
                'academic_year_id' => $year->id,
                'school_fee_id' => $fee->id,
                'user_id' => $adminId,
                'status' => $status,
                'invoice_date' => now()->toDateString(),
            ]);
        }

        $response = $this->post(route('report.final-year'), [
            'grade' => $grade->id,
            'classroom' => $classroom->id,
        ])->assertOk()
            ->assertViewHas('paid', fn (float $paid) => abs($paid - 2000.0) < 0.001);
    }
}
