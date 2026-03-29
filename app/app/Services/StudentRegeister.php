<?php

namespace App\Services;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\My_parents;
use App\Models\Student;
use Auth;
use Carbon\Carbon;

class StudentRegeister
{
    use LogsActivity, SchoolTrait;

    public function StudentRegeister($request)
    {
        $parent = My_parents::firstOrCreate(
            ['Father_Name' => $request->parents],
            [
                'Father_Name' => $request->parents,
                'Religion' => $request->religion,
                'user_id' => Auth::id(),
                'school_id' => $this->getSchool()->id,
            ]);

        
        $student = Student::create([
            'name' => $request->student_name,
            'birth_date' => $request->birth_date,
            'join_date' => Carbon::parse()->format('Y-m-d'),
            'gender' => $request->gender,
            'grade_id' => $request->grade,
            'parent_id' => $parent->id,
            'classroom_id' => $request->class_room,
            'address' => $request->address,
            'national_id' => $request->national_id,
            'student_status' => $request->std_status,
            'religion' => $parent->Religion ?? $request->religion,
            'birth_at_begin' => (new AgeCalculationService)->calculateAgeAsOfOctoberFirst(
                $request->birth_date,
            ),
            'acadmiecyear_id' => $request->academic_year,
            'nationality_id' => $request->nationality,
            'user_id' => Auth::id(),
            'school_id' => $this->getSchool()->id,
        ]);
        $this->logActivity(
            trans('log.actions.added'),
            trans('log.models.student.created', [
                'student_name' => $request->name,
            ]),
        );

        return ['student' => $student, 'parent' => $parent];
    }
}
