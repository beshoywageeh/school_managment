<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
class ReportController extends Controller
{
    public function index()
    {
        return view('backend.report.index');
    }
    public function ExportStudents(){
        $students = Grade::with(['students'])->withcount('students')->get();


        // Excel::download(new StudentsExport($student),'students.xlsx')
        return view('backend.report.students',get_defined_vars());
    }
    public function export_submit(Request $request)
    {
        $format = $request->input('format');
        $students = Grade::with(['students'])->withcount('students')->get();
        switch ($format) {
            case 'excel':
                return Excel::download(new StudentsExport($students), 'users.xlsx');

            case 'pdf':
                return redirect()->route('Students.pdf', 'test');

            case 'word':
                $phpWord = new PhpWord();
                $section = $phpWord->addSection();


                foreach ($students as $student) {
                    $section->addText($student->name);
                    foreach ($student->students as $std){
                        $section->addText($std->name);
                    }
                }

                $fileName = 'users.docx';
                $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
                $objWriter->save($fileName);

                return response()->download($fileName)->deleteFileAfterSend(true);

            default:
                return redirect()->back()->with('error', 'Invalid format selected');
        }
    }
}
