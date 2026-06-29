<?php

namespace App\Services\Student;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\My_parents;
use App\Models\Student;
use Auth;
use Carbon\Carbon;

class StudentRegeister
{
    use LogsActivity, SchoolTrait;

    public function StudentRegeister($request)
    {
        $parent = My_parents::find($request['parent_id']);
        if (is_null($parent)) {
            $parent = My_parents::Create([
                'father_name' => $request['parent_id'],
                'religion' => $request['religion'],
                'user_id' => Auth::id(),
                'school_id' => $this->getSchool()->id,
            ]);
        }

        $student = Student::create([
            'name' => $request['name'],
            'birth_date' => $request['birth_date'],
            'join_date' => Carbon::parse($request['birth_date'])->format(
                'Y-m-d',
            ),
            'gender' => $request['gender'],
            'grade_id' => $request['grade_id'],
            'parent_id' => $parent->id,
            'classroom_id' => $request['classroom_id'],
            'address' => $request['address'],
            'national_id' => $request['national_id'],
            'student_status' => $request['student_status'],
            'religion' => $parent->religion ?? $request['religion'],
            'birth_at_begin' => new AgeCalculationService()->calculateAgeAsOfOctoberFirst(
                $request['birth_date'],
            ),
            'acadmiecyear_id' => $request['academic_year'],
            'nationality_id' => $request['nationality'],
            'user_id' => Auth::id(),
            'school_id' => $this->getSchool()->id,
        ]);
        $this->logActivity(
            trans('log.actions.added'),
            trans('log.models.student.created', [
                'student_name' => $request['student_name'],
            ]),
        );

        return ['student' => $student, 'parent' => $parent];
    }
}
