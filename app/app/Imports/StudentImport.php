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
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class StudentImport implements ToCollection, WithChunkReading
{
    protected $batchSize = 1000; // Define batch size
    //    protected $userId;

    //    public function __construct($userId)
    //    {
    //        $this->userId = $userId;
    //    }

    public function collection(Collection $rows)
    {
        $students = [];
        $defaultGradeId = config('defaults.grade_id', 1);
        $defaultParent = My_parents::firstOrCreate(
            ['Father_Name' => 'Default Parent'],
            [
                'user_id' => Auth::user()->id,
                'school_id' => Auth::user()->school_id,
            ]
        );
        $defaultParentId = $defaultParent->id;

        // Preload all necessary grades, parents, and classes into arrays to reduce queries in the loop
        $grades = Grade::pluck('id', 'name')->toArray();
        $parents = My_parents::pluck('id', 'Father_Name')->toArray();
        $classes = class_room::pluck('id', 'name')->toArray();

        // Get the last student code once before the loop to optimize performance.
        $lastStudent = Student::orderBy('code', 'desc')->first();
        $nextCode = isset($lastStudent) ? (int) $lastStudent->code + 1 : 1;

        foreach ($rows as $index => $row) {
            // It's recommended to use WithHeadingRow concern to map columns by name instead of index.
            $gradeId = $grades[$row[8]] ?? $defaultGradeId;
            $classId = $classes[$row[9]] ?? null;

            $parentName = ltrim($row[10]);
            if (! empty($parentName)) {
                if (isset($parents[$parentName])) {
                    $parentId = $parents[$parentName];
                } else {

                    $newParent = My_parents::updateorcreate(['Father_Name' => $parentName], [
                        'Father_Name' => $parentName,
                        'user_id' => Auth::user()->id,
                        'school_id' => Auth::user()->school_id,
                        'address' => $row[2],
                        'Father_Phone' => $row[12],
                    ]);
                    $parentId = $newParent->id;
                    $parents[$parentName] = $parentId; // Cache it for the current import
                }
            } else {
                $parentId = $defaultParentId;
            }

            $genderEnum = UserGender::tryFrom($row[5]);
            $religionEnum = user_religion::tryFrom($row[7]);
            $statusEnum = Student_Status::tryFrom($row[6]);

            if (! $genderEnum) {
                Log::warning("Unmapped gender for student: {$row[0]}");

                continue; // Skip this row
            }
            if (! $religionEnum) {
                Log::warning("Unmapped religion for student: {$row[0]}");

                continue; // Skip this row
            }
            if (! $statusEnum) {
                Log::warning("Unmapped status for student: {$row[0]}");

                continue; // Skip this row
            }

            try {
                $arabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
                $western = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
                $date = str_replace($arabic, $western, $row[1]);
                $birthDate = Carbon::parse($date);
                //                $birthDate = Carbon::createFromFormat($row[1],$birthDate);
                //                $birthDate=Carbon::createFromTimeString($row[1]);
                $joinDate = Carbon::parse($row[3]);
            } catch (\Exception $e) {
                Log::error("Could not parse date for student: {$row[0]}. Error: {$e->getMessage()}");

                continue; // Skip row if dates are invalid
            }

            // Calculate age at the beginning of the school year (Oct 1st).
            $startOfYear = Carbon::create($joinDate->year, 10, 1);
            $age = $birthDate->diff($startOfYear);
            $birth_at_begin = $age->format('%y-%m-%d');

            $code = str_pad($nextCode, 6, '0', STR_PAD_LEFT);
            $nextCode++;
            //            $std_ltrim=($row[0]);
            //            $std_rtrim=($std_ltrim);
            //            $student_name=explode($std_rtrim,' ');
            $students[] = [
                'code' => $code,
                'name' => $row[0],
                'birth_date' => $birthDate->format('Y-m-d'),
                'address' => $row[2],
                'join_date' => $joinDate->format('Y-m-d'),
                'national_id' => $row[4],
                'gender' => $genderEnum->value,
                'student_status' => $statusEnum->value,
                'religion' => $religionEnum->value,
                'user_id' => Auth::user()->id,
                'grade_id' => $gradeId,
                'parent_id' => $parentId,
                'classroom_id' => $classId,
                'birth_at_begin' => $birth_at_begin,
                'school_id' => Auth::user()->school_id,
                'acadmiecyear_id' => 1,
                'nationality_id' => 64,
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

    public function chunkSize(): int
    {
        return $this->batchSize;
    }
}
