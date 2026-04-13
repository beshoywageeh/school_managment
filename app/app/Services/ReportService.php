<?php

namespace App\Services;

use App\Models\Acadmice_year;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\Student;

class ReportService
{
    public function getStudentReportByGrade(int $gradeId, int $academicYearId): \Illuminate\Database\Eloquent\Collection
    {
        return Student::where('grade_id', $gradeId)
            ->where('acadmiecyear_id', $academicYearId)
            ->with(['parent:id,Father_Name', 'class_room:id,name'])
            ->get(['id', 'name', 'gender', 'classroom_id', 'parent_id']);
    }

    public function getStudentReportByClass(int $classId, int $academicYearId): \Illuminate\Database\Eloquent\Collection
    {
        return Student::where('classroom_id', $classId)
            ->where('acadmiecyear_id', $academicYearId)
            ->with(['parent:id,Father_Name'])
            ->get(['id', 'name', 'gender']);
    }

    public function getPaymentStatusReport(int $schoolId, int $academicYearId): array
    {
        $students = Student::where('school_id', $schoolId)
            ->where('acadmiecyear_id', $academicYearId)
            ->with(['fee_invoices' => function ($query) {
                $query->select('id', 'student_id', 'status', 'amount');
            }])
            ->get(['id', 'name', 'grade_id']);

        return $students->map(function ($student) {
            $totalInvoice = $student->fee_invoices->sum('amount');
            $paidAmount = $student->fee_invoices->where('status', 'payed')->sum('amount');
            $remaining = $totalInvoice - $paidAmount;

            return [
                'student' => $student->name,
                'total' => $totalInvoice,
                'paid' => $paidAmount,
                'remaining' => $remaining,
                'status' => $remaining <= 0 ? 'paid' : ($paidAmount > 0 ? 'partial' : 'unpaid'),
            ];
        })->toArray();
    }

    public function getFeesInvoicesReport(int $schoolId, ?int $gradeId = null, ?int $academicYearId = null): \Illuminate\Database\Eloquent\Collection
    {
        $query = \App\Models\Fee_invoice::where('school_id', $schoolId)
            ->with(['students:id,name', 'fees:id,title,amount']);

        if ($gradeId) {
            $query->where('grade_id', $gradeId);
        }

        if ($academicYearId) {
            $query->where('academic_year_id', $academicYearId);
        }

        return $query->get();
    }

    public function getGradesWithCounts(int $schoolId): \Illuminate\Database\Eloquent\Collection
    {
        return Grade::where('school_id', $schoolId)
            ->withCount(['students', 'class_rooms'])
            ->get(['id', 'name']);
    }

    public function getClassRoomsWithCounts(int $gradeId): \Illuminate\Database\Eloquent\Collection
    {
        return class_room::where('grade_id', $gradeId)
            ->withCount('students')
            ->get(['id', 'name', 'grade_id']);
    }

    public function getAcademicYearsList(): \Illuminate\Database\Eloquent\Collection
    {
        return Acadmice_year::orderBy('year', 'desc')->get(['id', 'year', 'view', 'status']);
    }
}
