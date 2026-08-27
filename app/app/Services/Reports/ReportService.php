<?php

namespace App\Services\Reports;

use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\FeeInvoice;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;

class ReportService
{
    public function getStudentReport(int $type, $request): ?array
    {
        $year_start = now()->format('Y');
        $data['acc'] = AcademicYear::whereYear('year_start', $year_start)->first();

        if (is_null($data['acc'])) {
            return null;
        }

        if ($type == 41) {
            $data['students'] = Student::where('classroom_id', $request->classroom_id)
                ->where('student_status', 0)
                ->where('acadmiecyear_id', $data['acc']->id)
                ->with([
                    'parent:id,father_name,address',
                    'grade:id,name',
                    'classroom:id,name',
                ])
                ->orderBy('gender', 'DESC')
                ->orderBy('name', 'ASC')
                ->orderBy('religion', 'ASC')
                ->get([
                    'id',
                    'name',
                    'student_status',
                    'classroom_id',
                    'grade_id',
                    'parent_id',
                    'national_id',
                    'religion',
                    'birth_date',
                    'birth_at_begin',
                ])
                ->chunk(100);

            $data['classroom'] = ClassRoom::where('id', $request->classroom_id)
                ->with('grade')
                ->first();

            return $data;
        }

        return null;
    }

    public function getStudentReportByGrade(
        int $gradeId,
        int $academicYearId,
    ): Collection {
        return Student::where('grade_id', $gradeId)
            ->where('acadmiecyear_id', $academicYearId)
            ->with(['parent:id,father_name', 'classroom:id,name'])
            ->get(['id', 'name', 'gender', 'classroom_id', 'parent_id']);
    }

    public function getStudentReportByClass(
        int $classId,
        int $academicYearId,
    ): Collection {
        return Student::where('classroom_id', $classId)
            ->where('acadmiecyear_id', $academicYearId)
            ->with(['parent:id,father_name'])
            ->get(['id', 'name', 'gender']);
    }

    public function getFeesInvoicesReport(
        int $schoolId,
        ?int $gradeId = null,
        ?int $academicYearId = null,
    ): Collection {
        $query = FeeInvoice::where('school_id', $schoolId)->with([
            'students:id,name',
            'fees:id,title,amount',
        ]);

        if ($gradeId) {
            $query->where('grade_id', $gradeId);
        }

        if ($academicYearId) {
            $query->where('academic_year_id', $academicYearId);
        }

        return $query->get();
    }

    public function getGradesWithCounts(int $schoolId): Collection
    {
        return Grade::where('school_id', $schoolId)
            ->withCount(['students', 'class_rooms'])
            ->get(['id', 'name']);
    }

    public function getClassRoomsWithCounts(int $gradeId): Collection
    {
        return ClassRoom::where('grade_id', $gradeId)
            ->withCount('students')
            ->get(['id', 'name', 'grade_id']);
    }

    public function getAcademicYearsList(): Collection
    {
        return AcademicYear::orderBy('year_start', 'desc')->get([
            'id',
            'year_start',
            'year_end',
            'view',
            'status',
        ]);
    }
}
