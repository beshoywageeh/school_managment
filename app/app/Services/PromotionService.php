<?php

namespace App\Services;

use App\Http\Traits\LogsActivity;
use App\Models\Promotion;
use App\Models\School;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class PromotionService
{
    use LogsActivity;

    public function promoteStudents(array $studentIds, int $fromGradeId, int $toGradeId, int $fromClassId, int $toClassId, int $academicYearId, School $school): array
    {
        $students = Student::whereIn('id', $studentIds)->get();

        $result = DB::transaction(function () use ($students, $toGradeId, $toClassId, $academicYearId, $school) {
            $updateCount = $students->toQuery()->update([
                'grade_id' => $toGradeId,
                'classroom_id' => $toClassId,
                'acadmiecyear_id' => $academicYearId,
            ]);

            foreach ($students as $student) {
                Promotion::updateOrCreate(
                    [
                        'student_id' => $student->id,
                        'from_grade' => $student->grade_id,
                        'from_class' => $student->classroom_id,
                    ],
                    [
                        'to_grade' => $toGradeId,
                        'to_class' => $toClassId,
                        'acc_year_from' => $student->acadmiecyear_id,
                        'acc_year_to' => $academicYearId,
                        'school_id' => $school->id,
                    ]
                );
            }

            return $updateCount;
        });

        return [
            'success' => true,
            'promoted_count' => $result,
        ];
    }

    public function getPromotionsHistory(int $schoolId): Collection
    {
        return Promotion::where('school_id', $schoolId)
            ->with(['students:id,name', 'f_grade:id,name', 'f_class:id,name', 't_grade:id,name', 't_class:id,name'])
            ->get();
    }

    public function getAvailableStudentsForPromotion(int $gradeId, int $classId): Collection
    {
        return Student::where('grade_id', $gradeId)
            ->where('classroom_id', $classId)
            ->select(['id', 'name', 'gender', 'religion'])
            ->get();
    }
}
