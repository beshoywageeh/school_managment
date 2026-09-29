<?php

namespace App\Services\Reports;

use App\Enums\Student_Status;
use App\Models\AcademicYear;
use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;

class ReportService
{
    /**
     * Resolve the academic year flagged active by the system settings.
     *
     * This is the single convention every year-scoped report uses; it never
     * falls back to the current calendar year, because an inactive period may
     * still be the one the school is reporting on.
     */
    public function activeAcademicYear(): ?AcademicYear
    {
        return AcademicYear::query()
            ->where('status', config('school.academic_year_status'))
            ->first();
    }

    public function getStudentReport(int $type, $request): ?array
    {
        $data['acc'] = $this->activeAcademicYear();

        if (is_null($data['acc'])) {
            return null;
        }

        if ($type == 41) {
            $data['students'] = Student::where('classroom_id', $request->classroom_id)
                ->where('student_status', Student_Status::NEW->value)
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
                ]);

            $data['classroom'] = ClassRoom::query()
                ->where('id', $request->classroom_id)
                ->with('grade')
                ->first();

            if (is_null($data['classroom'])) {
                return null;
            }

            return $data;
        }

        return null;
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
