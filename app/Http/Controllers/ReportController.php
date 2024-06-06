<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Models\Student;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index()
    {
        return view('backend.report.index');
    }
    public function ExportStudents(){
        $student = Student::get();

        return Excel::download(new StudentsExport($student),'students.xlsx');
    }
}
