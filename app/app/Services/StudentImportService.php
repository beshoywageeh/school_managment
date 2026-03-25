<?php

namespace App\Services;

use App\Imports\StudentImport;
use Maatwebsite\Excel\Excel as ExcelFormat;
use Maatwebsite\Excel\Facades\Excel;

class StudentImportService
{
    public function StudentImport($file, int $userId, int $schoolId, ?int $academicYearId = null, ?int $nationalityId = null)
    {
        $import = new StudentImport($userId, $schoolId, $academicYearId, $nationalityId);
        $path = $file->getRealPath();

        Excel::queueImport($import, $path, null, ExcelFormat::XLSX);

        // مفيش getResult() هنا — الـ import لسه مرنش
        return ['message' => 'Import started successfully, students will be added shortly.'];
    }
}
