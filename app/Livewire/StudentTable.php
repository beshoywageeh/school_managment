<?php

namespace App\Livewire;

use App\Http\Traits\SchoolTrait;
use App\Models\class_room;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

class StudentTable extends Component
{
    use WithPagination, SchoolTrait;

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
    public $perPage = 10; // Default per page value

    protected $queryString = [
        'search' => ['except' => ''],
        'grade_id' => ['except' => null],
        'classroom_id' => ['except' => null],
        'joinDateFrom' => ['except' => null],
        'joinDateTo' => ['except' => null],
        'sortField' => ['except' => 'students.name'],
        'sortDirection' => ['except' => 'asc'],
        'perPage' => ['except' => 10], // Add perPage to query string
    ];

    public function updating($name)
    {
        if (in_array($name, ['search', 'grade_id', 'classroom_id', 'joinDateFrom', 'joinDateTo', 'perPage'])) { // Add perPage here
            $this->resetPage();
        }
    }

    // When grade is updated, reset the classroom
    public function updatedGradeId()
    {
        $this->reset('classroom_id');
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
        if (!$this->grade_id) {
            return collect();
        }
        return class_room::where('grade_id', $this->grade_id)->get();
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
                    $q->where('students.name', 'like', '%' . $this->search . '%')
                      ->orWhere('parents.Father_Name', 'like', '%' . $this->search . '%')
                      ->orWhere('students.address', 'like', '%' . $this->search . '%');
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

        if (!Auth::user()->hasRole('Admin')) {
            $gradeIds = DB::table('teacher_grade')->where('teacher_id', Auth::id())->pluck('grade_id');
            $query->whereIn('students.grade_id', $gradeIds);
        }

        $students = $query->paginate($this->perPage); // Use $this->perPage

        return view('livewire.student-table', [
            'students' => $students,
        ]);
    }
}

