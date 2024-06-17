<?php

namespace App\Imports;

use App\Enums\{Student_Status, user_religion, UserGender};
use App\Models\class_room;
use App\Models\Grade;
use App\Models\My_parents;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Jobs\ImportStudentsJob;

class StudentImport implements ToCollection
{
    protected $batchSize = 500; // Define batch size

    public function collection(Collection $rows)
    {
        $students = [];
        $defaultGradeId = config('defaults.grade_id', 1);
        $defaultParentId = config('defaults.parent_id', 1);

        // Preload all necessary grades, parents, and classes into arrays to reduce queries in the loop
        $grades = Grade::pluck('id', 'name')->toArray();
        $parents = My_parents::pluck('id', 'Father_Name')->toArray();
        $classes = class_room::pluck('id', 'name')->toArray();

        foreach ($rows as $index => $row) {
            $gradeId = $grades[$row[9]] ?? $defaultGradeId;
            $parentId = $parents[$row[10]] ?? $defaultParentId;
            $classId = $classes[$row[9]] ?? null;

            $genderEnum = UserGender::fromString($row[7]);
            $religionEnum = user_religion::fromString($row[5]);
            $statusEnum = Student_Status::fromString($row[6]);

            if (!$genderEnum || !$religionEnum || !$statusEnum) {
                Log::warning("Unmapped gender, religion, or status: {$row[0]}");
                continue; // Skip this row or handle as needed
            }

            $students[] = [
                'name' => $row[0],
                'birth_date' => date('Y-m-d', strtotime($row[1])),
                'address' => $row[2],
                'join_date' => date('Y-m-d', strtotime($row[3])),
                'national_id' => $row[4],
                'gender' => $genderEnum->value,
                'student_status' => $statusEnum->value,
                'religion' => $religionEnum->value,
                'user_id' => Auth::id(),
                'grade_id' => $gradeId,
                'parent_id' => $parentId,
                'classroom_id' => $classId,
            ];

            // Dispatch job if batch size is reached
            if (count($students) >= $this->batchSize) {
                ImportStudentsJob::dispatch($students);
                $students = []; // Reset the students array
            }
        }

        // Dispatch remaining students
        if (!empty($students)) {
            ImportStudentsJob::dispatch($students);
        }
    }
}
