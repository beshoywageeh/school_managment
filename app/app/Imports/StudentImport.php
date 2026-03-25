<?php

namespace App\Imports;

use App\Enums\Student_Status;
use App\Enums\user_religion;
use App\Enums\UserGender;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\My_parents;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class StudentImport implements OnEachRow, ShouldQueue, WithChunkReading, WithHeadingRow
{
    protected $batchSize = 500;

    protected $userId;

    protected $schoolId;

    protected $academicYearId;

    protected $nationalityId;

    protected $grades = [];

    protected $parents = [];

    protected $classes = [];

    protected $defaultParentId;

    protected $defaultGradeId;

    protected $nextCode;

    public function __construct(
        int $userId,
        int $schoolId,
        ?int $academicYearId = null,
        ?int $nationalityId = null
    ) {
        $this->userId = $userId;
        $this->schoolId = $schoolId;
        $this->academicYearId = $academicYearId ?? 1;
        $this->nationalityId = $nationalityId ?? 64;

        $this->defaultGradeId = config('defaults.grade_id', 1);

        $defaultParent = My_parents::firstOrCreate(
            ['Father_Name' => 'Default Parent', 'school_id' => $this->schoolId],
            ['user_id' => $this->userId, 'school_id' => $this->schoolId]
        );
        $this->defaultParentId = $defaultParent->id;

        $this->grades = Grade::pluck('id', 'name')->toArray();
        $this->parents = My_parents::where('school_id', $this->schoolId)
            ->pluck('id', 'Father_Name')
            ->toArray();
        $this->classes = class_room::pluck('id', 'name')->toArray();

        $lastStudent = Student::orderBy('code', 'desc')->first();
        $this->nextCode = $lastStudent ? (int) $lastStudent->code + 1 : 1;
    }

    public function onRow(Row $row)
    {
        $rowData = $row->toArray();

        if (empty(array_filter($rowData))) {
            return;
        }

        $name = trim($rowData['name'] ?? '');
        $birthDateRaw = trim($rowData['birth_date'] ?? '');
        $address = trim($rowData['address'] ?? '');
        $joinDateRaw = trim($rowData['join_date'] ?? date('Y-m-d'));
        $nationalId = trim($rowData['national_id'] ?? '');
        $gender = trim($rowData['gender'] ?? '');
        $status = trim($rowData['status'] ?? '');
        $religion = trim($rowData['religion'] ?? '');
        $gradeName = trim($rowData['grade'] ?? '');
        $className = trim($rowData['class'] ?? '');
        $parentName = trim($rowData['parent_name'] ?? '');
        $parentPhone = trim($rowData['parent_phone'] ?? '');

        if (empty($name)) {
            Log::warning("StudentImport: skipped row — name is empty {$name}");

            return;
        }

        if (! empty($nationalId)) {
            $exists = Student::where('national_id', $nationalId)
                ->where('school_id', $this->schoolId)
                ->exists();
            if ($exists) {
                Log::info("StudentImport: skipped duplicate national_id {$nationalId} ({$name})");

                return;
            }
        }

        $gradeId = $this->grades[$gradeName] ?? $this->defaultGradeId;
        $classId = $this->classes[$className] ?? null;

        if (! empty($parentName)) {
            if (isset($this->parents[$parentName])) {
                $parentId = $this->parents[$parentName];
            } else {
                $newParent = My_parents::updateOrCreate(
                    ['Father_Name' => $parentName, 'school_id' => $this->schoolId],
                    [
                        'user_id' => $this->userId,
                        'school_id' => $this->schoolId,
                        'address' => $address,
                        'Father_Phone' => $parentPhone,
                    ]
                );
                $parentId = $newParent->id;
                $this->parents[$parentName] = $parentId;
            }
        } else {
            $parentId = $this->defaultParentId;
        }

        $genderEnum = UserGender::fromString($gender);
        $religionEnum = user_religion::fromString($religion);
        $statusEnum = Student_Status::fromString($status);

        if (! $genderEnum) {
            Log::warning("StudentImport: invalid gender '{$gender}' for student {$name}");

            return;
        }
        if (! $religionEnum) {
            Log::warning("StudentImport: invalid religion '{$religion}' for student {$name}");

            return;
        }
        if (! $statusEnum) {
            Log::warning("StudentImport: invalid status '{$status}' for student {$name}");

            return;
        }

        try {
            $arabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
            $western = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

            $birthDateRaw = str_replace($arabic, $western, $birthDateRaw);
            $joinDateRaw = str_replace($arabic, $western, $joinDateRaw);

            if (is_numeric($birthDateRaw)) {
                $birthDate = Carbon::instance(
                    \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject((float) $birthDateRaw)
                );
            } else {
                $birthDate = Carbon::parse($birthDateRaw);
            }

            if (is_numeric($joinDateRaw)) {
                $joinDate = Carbon::instance(
                    \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject((float) $joinDateRaw)
                );
            } else {
                $joinDate = Carbon::parse($joinDateRaw);
            }

        } catch (\Exception $e) {
            Log::error("StudentImport: invalid date for student {$name} — {$e->getMessage()}");

            return;
        }

        $startOfYear = Carbon::create($joinDate->year, 10, 1);
        $birth_at_begin = $birthDate->diff($startOfYear)->format('%y-%m-%d');

        $code = str_pad($this->nextCode, 6, '0', STR_PAD_LEFT);
        $this->nextCode++;

        Student::create([
            'code' => $code,
            'name' => $name,
            'birth_date' => $birthDate->format('Y-m-d'),
            'address' => $address,
            'join_date' => $joinDate->format('Y-m-d'),
            'national_id' => $nationalId,
            'gender' => $genderEnum->value,
            'student_status' => $statusEnum->value,
            'religion' => $religionEnum->value,
            'user_id' => $this->userId,
            'grade_id' => $gradeId,
            'parent_id' => $parentId,
            'classroom_id' => $classId,
            'birth_at_begin' => $birth_at_begin,
            'school_id' => $this->schoolId,
            'acadmiecyear_id' => $this->academicYearId,
            'nationality_id' => $this->nationalityId,
        ]);
    }

    public function chunkSize(): int
    {
        return $this->batchSize;
    }
}
