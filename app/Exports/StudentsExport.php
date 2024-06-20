<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentsExport implements FromView
{
  protected $data;
  public function __construct($data)
  {
      $this->data=$data;
  }
    public function view(): View
    {
        return view('backend.report.students', [
            'students' => $this->data
        ]);
    }
}
