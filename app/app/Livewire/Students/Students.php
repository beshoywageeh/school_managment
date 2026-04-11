<?php

namespace App\Livewire\Students;

use App\Http\Traits\SchoolTrait;
use App\Models\acadmice_year;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\My_parents;
use App\Models\school_fee;
use App\Models\Student;
use App\Services\FinancialService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    use SchoolTrait, WithPagination;

    // Filters
    public $search = '';

    public $grade_id = null;

    public $classroom_id = null;

    public $joinDateFrom = null;

    public $joinDateTo = null;

    // Sorting
    public $sortField = 'students.name';

    public $sortDirection = 'asc';

    // Per Page
    public $perPage = 10;

    // Form fields
    public $student_name = '';

    public $birth_date = '';

    public $national_id = '';

    public $nationality = '';

    public $religion = '';

    public $std_status = '';

    public $gender = '';

    public $address = '';

    public $grade = '';

    public $classroom = '';

    public $parent_name_input = '';

    public $check_birth = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'grade_id' => ['except' => null],
        'classroom_id' => ['except' => null],
        'joinDateFrom' => ['except' => null],
        'joinDateTo' => ['except' => null],
        'sortField' => ['except' => 'students.name'],
        'sortDirection' => ['except' => 'asc'],
        'perPage' => ['except' => 10],
    ];

    public function updating($name)
    {
        if (in_array($name, ['search', 'grade_id', 'classroom_id', 'joinDateFrom', 'joinDateTo', 'perPage'])) {
            $this->resetPage();
        }
    }

    // When grade is updated, reset the classroom (Filters)
    public function updatedGradeId()
    {
        $this->reset('classroom_id');
    }

    // When grade is updated in create form, reset the classroom
    public function updatedGrade()
    {
        $this->reset('classroom');
    }

    public function updatedBirthDate($value)
    {
        if (! $value) {
            $this->check_birth = '';

            return;
        }

        try {
            $birthDate = Carbon::parse($value);
            $currentYear = now()->year;
            $targetDate = Carbon::create($currentYear, 10, 1);

            $diff = $birthDate->diff($targetDate);

            $this->check_birth = $diff->y.' '.trans('student.year').', '.
                                 $diff->m.' '.trans('student.month').', '.
                                 $diff->d.' '.trans('student.day');
        } catch (\Exception $e) {
            $this->check_birth = '';
        }
    }

    // When perPage is updated, reset the page
    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function getGradesProperty()
    {
        return Grade::where('school_id', Auth::user()->school_id)->get();
    }

    public function getClassroomsProperty()
    {
        if (! $this->grade_id) {
            return collect();
        }

        return class_room::where('grade_id', $this->grade_id)->get();
    }

    public function getNewClassroomsProperty()
    {
        if (! $this->grade) {
            return collect();
        }

        return class_room::where('grade_id', $this->grade)->get();
    }

    public function getParentsProperty()
    {
        return My_parents::where('school_id', Auth::user()->school_id)
            ->when($this->parent_name_input, function ($query) {
                $query->where('Father_Name', 'like', '%'.$this->parent_name_input.'%');
            })
            ->limit(10)
            ->get();
    }

    public function store()
    {
        $this->validate([
            'student_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'national_id' => 'required|string|size:14|unique:students,national_id',
            'nationality' => 'required',
            'religion' => 'required',
            'std_status' => 'required',
            'gender' => 'required',
            'address' => 'required|string',
            'grade' => 'required',
            'classroom' => 'required',
            'parent_name_input' => 'required|string',
        ]);

        try {
            DB::beginTransaction();

            $school = $this->getSchool();
            $academicYear = acadmice_year::where('school_id', $school->id)
                ->where('status', \App\Enums\Status::OPEN)
                ->first();

            if (! $academicYear) {
                throw new \Exception(trans('general.Message.NoOpenAcademicYear'));
            }

            // Find or create parent
            $parent = My_parents::where('school_id', $school->id)
                ->where('Father_Name', $this->parent_name_input)
                ->first();

            if (! $parent) {
                $parent = My_parents::create([
                    'Father_Name' => $this->parent_name_input,
                    'user_id' => Auth::id(),
                    'school_id' => $school->id,
                    'slug' => Str::slug($this->parent_name_input).'-'.mt_rand(1000, 9999),
                ]);
            }

            $student = Student::create([
                'name' => $this->student_name,
                'birth_date' => $this->birth_date,
                'national_id' => $this->national_id,
                'nationality_id' => $this->nationality,
                'religion' => $this->religion,
                'student_status' => $this->std_status,
                'gender' => $this->gender,
                'address' => $this->address,
                'grade_id' => $this->grade,
                'classroom_id' => $this->classroom,
                'parent_id' => $parent->id,
                'school_id' => $school->id,
                'user_id' => Auth::id(),
                'code' => mt_rand(1000000000, 9999999999),
                'join_date' => now(),
                'acadmiecyear_id' => $academicYear->id,
                'slug' => Str::slug($this->student_name).'-'.mt_rand(1000, 9999),
                'birth_at_begin' => $this->check_birth,
            ]);

            // Financial Services Integration
            $financialService = new FinancialService;

            // 1. Generate Fee Invoices for the student based on grade/classroom
            $school_fees = school_fee::where('school_id', $school->id)
                ->where('academic_year_id', $academicYear->id)
                ->where('grade_id', $this->grade)
                ->where('classroom_id', $this->classroom)
                ->get();

            foreach ($school_fees as $fee) {
                $financialService->FeeInvoice(
                    $student,
                    $fee->id,
                    $academicYear->id,
                    $school->id
                );

                // Create Student Account entry (Recorded as Credit in this system's convention for invoices)
                $financialService->CreateStudentAccount(
                    $student,
                    $fee->id,
                    $academicYear->id,
                    'invoice',
                    0.0,
                    $fee->amount
                );
            }

            // 2. Automatically generate Book and Clothes Invoices
            $financialService->AddStudentBookInvoice($student);
            $financialService->AddStudentClotheInvoice($student);

            DB::commit();

            $this->resetForm();
            $this->dispatch('close-modal', id: 'Create_Student');
            session()->flash('success', trans('general.Message.Success'));

        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
        }
    }

    public function resetForm()
    {
        $this->reset([
            'student_name',
            'birth_date',
            'national_id',
            'nationality',
            'religion',
            'std_status',
            'gender',
            'address',
            'grade',
            'classroom',
            'parent_name_input',
            'check_birth',
        ]);
    }

    public function render()
    {
        $school = $this->getSchool();

        $query = Student::query()
            ->join('parents', 'students.parent_id', '=', 'parents.id')
            ->join('grades', 'students.grade_id', '=', 'grades.id')
            ->join('class_rooms', 'students.classroom_id', '=', 'class_rooms.id')
            ->where('students.school_id', $school->id)
            ->whereNull('students.deleted_at')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('students.name', 'like', '%'.$this->search.'%')
                        ->orWhere('parents.Father_Name', 'like', '%'.$this->search.'%')
                        ->orWhere('students.address', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->grade_id, function ($query) {
                $query->where('students.grade_id', $this->grade_id);
            })
            ->when($this->classroom_id, function ($query) {
                $query->where('students.classroom_id', $this->classroom_id);
            })
            ->when($this->joinDateFrom, function ($query) {
                $query->whereDate('students.join_date', '>=', Carbon::parse($this->joinDateFrom));
            })
            ->when($this->joinDateTo, function ($query) {
                $query->whereDate('students.join_date', '<=', Carbon::parse($this->joinDateTo));
            })
            ->select([
                'students.*',
                'parents.Father_Name as parent_name',
                'grades.name as grade_name',
                'class_rooms.name as classroom_name',
            ])
            ->orderBy($this->sortField, $this->sortDirection);

        if (! Auth::user()->hasRole('Admin')) {
            $gradeIds = DB::table('teacher_grade')->where('teacher_id', Auth::id())->pluck('grade_id');
            $query->whereIn('students.grade_id', $gradeIds);
        }

        $students = $query->paginate($this->perPage);

        return view('livewire.students.students', [
            'students' => $students,
            'grades' => $this->grades,
        ]);
    }
}
