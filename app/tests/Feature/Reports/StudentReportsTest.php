<?php

namespace Tests\Feature\Reports;

use App\Enums\Student_Status;
use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\MyParent;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;

class StudentReportsTest extends ReportTestCase
{
    /**
     * @return array{year: AcademicYear, grade: Grade, classroom: ClassRoom, student: Student}
     */
    private function studentFixture($school): array
    {
        $adminId = auth()->id();
        $year = $this->activeAcademicYear($school);
        $grade = Grade::factory()->create(['school_id' => $school->id, 'user_id' => $adminId]);
        $classroom = ClassRoom::factory()->create(['grade_id' => $grade->id, 'school_id' => $school->id, 'user_id' => $adminId]);
        $parent = MyParent::factory()->create(['school_id' => $school->id]);
        $student = Student::factory()->create([
            'school_id' => $school->id,
            'grade_id' => $grade->id,
            'classroom_id' => $classroom->id,
            'parent_id' => $parent->id,
            'acadmiecyear_id' => $year->id,
            'user_id' => $adminId,
            'student_status' => Student_Status::NEW->value,
            'tameen' => 'active',
        ]);

        return compact('year', 'grade', 'classroom', 'student');
    }

    public function test_export_students_renders_grouped_by_grade(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->studentFixture($school);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($fx) {
                return $view === 'backend.report.PDF.students'
                    && $data instanceof Collection
                    && $data->has($fx['grade']->name)
                    && $data->first()->pluck('id')->contains($fx['student']->id);
            });

        $this->get(route('report.export-student'))->assertOk();
    }

    public function test_export_students_filters_by_grade_and_classroom(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->studentFixture($school);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($fx) {
                return $view === 'backend.report.PDF.students'
                    && $data->has($fx['grade']->name)
                    && $data->first()->pluck('id')->contains($fx['student']->id);
            });

        $this->get(route('report.export-student'), [
            'grade' => $fx['grade']->id,
            'classroom' => $fx['classroom']->id,
        ])->assertOk();
    }

    public function test_export_students_redirects_with_message_when_no_rows(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->get(route('report.export-student'))
            ->assertRedirect()
            ->assertSessionHas('info', trans('report.no_data_found'));
    }

    public function test_student_report_type_41_renders_new_students_only(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->studentFixture($school);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($fx) {
                return $view === 'backend.report.PDF.41'
                    && isset($data['students'], $data['classroom'], $data['acc'])
                    && $data['students']->pluck('id')->contains($fx['student']->id)
                    && $data['classroom']->id === $fx['classroom']->id;
            });

        $this->post(route('report.student-report', ['type' => 41]), [
            'classroom_id' => $fx['classroom']->id,
        ])->assertOk();
    }

    public function test_student_report_rejects_unsupported_type(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->studentFixture($school);

        $this->post(route('report.student-report', ['type' => 99]), [
            'classroom_id' => $fx['classroom']->id,
        ])->assertNotFound();
    }

    public function test_student_report_validates_classroom_required(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->post(route('report.student-report', ['type' => 41]), [])
            ->assertSessionHasErrors('classroom_id');
    }

    public function test_student_tameen_renders_view_one_with_active_students(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->studentFixture($school);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(function ($view, $data) use ($fx) {
                return $view === 'backend.report.PDF.student_tameen_1'
                    && isset($data['students'], $data['classroom'], $data['aa'])
                    && $data['students']->pluck('id')->contains($fx['student']->id)
                    && $data['classroom']->id === $fx['classroom']->id;
            });

        $this->post(route('report.student-tameen'), [
            'type' => 1,
            'classroom_id' => $fx['classroom']->id,
        ])->assertOk();
    }

    public function test_student_tameen_type_2_selects_second_view(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->studentFixture($school);

        $this->mockPdfExport()
            ->shouldReceive('printPdf')->andReturn(response('mock-pdf'))
            ->once()
            ->withArgs(fn ($view) => $view === 'backend.report.PDF.student_tameen_2');

        $this->post(route('report.student-tameen'), [
            'type' => 2,
            'classroom_id' => $fx['classroom']->id,
        ])->assertOk();
    }

    public function test_student_tameen_validates_type_and_classroom(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);

        $this->post(route('report.student-tameen'), ['type' => 3, 'classroom_id' => 999])
            ->assertSessionHasErrors(['type', 'classroom_id']);
    }

    public function test_student_tameen_excludes_inactive_students(): void
    {
        $school = $this->school();
        $this->actingAsReportUser($school);
        $fx = $this->studentFixture($school);
        Student::where('id', $fx['student']->id)->update(['tameen' => 'inactive']);

        $this->post(route('report.student-tameen'), [
            'type' => 1,
            'classroom_id' => $fx['classroom']->id,
        ])->assertRedirect()->assertSessionHas('info', trans('report.no_data_found'));
    }
}
