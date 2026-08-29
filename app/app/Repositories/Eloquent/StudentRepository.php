<?php

namespace App\Repositories\Eloquent;

use App\Enums\Student_Status;
use App\Models\MyParent;
use App\Models\Student;
use App\Repositories\Interface\StudentInterface;
use App\Services\Student\AgeCalculationService;
use App\Services\Student\StudentRegeister;
use App\Services\Student\StudentService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class StudentRepository implements StudentInterface
{
    public function __construct(
        public StudentRegeister $StudentRegeister,
        public StudentService $studentService,
    ) {}

    public function getAllStudents()
    {
        return Student::query()
            ->join('parents', 'students.parent_id', '=', 'parents.id')
            ->join('grades', 'students.grade_id', '=', 'grades.id')
            ->join(
                'class_rooms',
                'students.classroom_id',
                '=',
                'class_rooms.id',
            )
            ->whereNull('students.deleted_at')
            ->withSum('fee_invoice', 'amount')
            ->select([
                'students.*',
                'parents.father_name as parent_name',
                'grades.name as grade_name',
                'class_rooms.name as classroom_name',
            ]);
    }

    public function storeStudent($request, $parent)
    {
        return $this->studentService->createStudent([
            'code' => $this->StudentRegeister->StudentCode(),
            'name' => $request['name'],
            'birth_date' => $request['birth_date'],
            'join_date' => Carbon::parse(now())->format('Y-m-d'),
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
            'school_id' => Auth::user()->school_id,
        ]);
    }

    public function editStudent($studentId) {}

    public function updateStudent($request)
    {
        $student = Student::findorfail($request->id);
        $student->update([
            'name' => $request->student_name,
            'birth_date' => $request->birth_date,
            'join_date' => $student->join_date,
            'gender' => $request->gender,
            'grade_id' => $request->grade,
            'parent_id' => $request->parents,
            'classroom_id' => $request->class_room,
            'address' => $request->address,
            'student_status' => Student_Status::fromString(
                $request->std_status,
            ),
            'national_id' => $request->national_id,
            'religion' => MyParent::findorfail($request->parents)->religion,
            'birth_at_begin' => new AgeCalculationService()->calculateAgeAsOfOctoberFirst(
                $request->birth_date,
            ),

            'nationality_id' => $request->nationality,
            'user_id' => Auth::Id(),
        ]);

        return $student;
    }

    public function showStudent($studentId)
    {
        return Student::with([
            'user:id,name',
            'grade:id,name',
            'classroom:id,name',
            'parent:id,father_name,mother_name,father_phone,mother_phone,father_job',
            'nationality',
            'studentAccount',
            'fee_invoice',
        ])
            ->withsum('studentAccount', 'debit')
            ->withsum('studentAccount', 'credit')
            ->findorfail($studentId);
    }
}
