<?php

namespace App\Services;

use App\Imports\StudentImport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class StudentImportService
{
    public function StudentImport($file)
    {
        $path = $file->getRealPath();
        Excel::import(new StudentImport, $path,null,ExcelExcel::XLSX);
    }
}
