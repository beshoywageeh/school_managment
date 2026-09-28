<?php

namespace Tests\Feature\Reports;

use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
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
}
