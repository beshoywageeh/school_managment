<?php

namespace App\Imports;

use App\Enums\Student_Status;
use App\Enums\user_religion;
use App\Enums\UserGender;
use App\Jobs\ImportStudentsJob;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\My_parents;
use App\Models\Student;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;

class StudentImport implements ToCollection
{
    protected $batchSize = 1000; // Define batch size

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
            $gradeId = $grades[$row[8]] ?? $defaultGradeId;
            $parentId = $parents[$row[10]] ?? $defaultParentId;
            $classId = $classes[$row[9]] ?? null;

            $genderEnum = UserGender::fromString($row[5]);
            $religionEnum = user_religion::fromString($row[7]);
            $statusEnum = Student_Status::fromString($row[6]);
            $inputDate = \Carbon\Carbon::parse(date('Y-m-d', strtotime($row[3])));
            $firstOfOctober = \Carbon\Carbon::create(date('Y'), 10, 1);
            $generate_code = Student::orderBy('code', 'desc')->first();
            $years = $inputDate->diffInYears($firstOfOctober);
            $months = $inputDate->diffInMonths($firstOfOctober) % 12;
            $days = $inputDate->diffInDays($firstOfOctober->copy()->subYears($years)->subMonths($months));
            $final_date = "{$years}-{$months}-{$days}";
            $code = isset($generate_code) ? str_pad($generate_code->code + 1, 6, '0', STR_PAD_LEFT) : '000001';
            if (! $genderEnum) {
                Log::warning("Unmapped gender {$row[0]}");

                break; // Skip this row or handle as needed
            }
            if (! $religionEnum) {
                Log::warning("Unmapped religion {$row[0]}");

                break; // Skip this row or handle as needed
            }
            if (! $statusEnum) {
                Log::warning("Unmapped status: {$row[0]}");

                break; // Skip this row or handle as needed
            }

            $students[] = [
                'code' => $code,
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
                'birth_at_begin' => $final_date,
            ];

            // Dispatch job if batch size is reached
            if (count($students) >= $this->batchSize) {
                ImportStudentsJob::dispatch($students);
                $students = []; // Reset the students array
            }
        }

        // Dispatch remaining students
        if (! empty($students)) {
            ImportStudentsJob::dispatch($students);
        }
    }
}
