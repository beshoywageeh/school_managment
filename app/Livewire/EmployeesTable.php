<?php

namespace App\Livewire;

use App\Models\Job;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeesTable extends Component
{
    use WithPagination;

    // Filter properties
    public $name = '';

    public $job_id = null;

    // Add advanced date filters
    public $startDate = null;

    public $endDate = null;

    // Sorting properties
    public $sortField = 'name';

    public $sortDirection = 'asc';

    protected $queryString = [
        'name' => ['except' => ''],
        'job_id' => ['except' => null],
        'startDate' => ['except' => null],
        'endDate' => ['except' => null],
        'sortField' => ['except' => 'name'],
        'sortDirection' => ['except' => 'asc'],
    ];

    public function updating($propertyName)
    {
        if (in_array($propertyName, ['name', 'job_id', 'startDate', 'endDate'])) {
            $this->resetPage();
        }
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

    public function resetFilters()
    {
        $this->name = '';
        $this->job_id = null;
        $this->startDate = null;
        $this->endDate = null;
        $this->resetPage();
    }

    public function render()
    {
        $employees = User::query()
            ->where('school_id', Auth::user()->school_id)
            ->where('code', '!=', '000001')
            ->when($this->name, function ($query) {
                $query->where(function ($q) {

                    // Force collation for the 'name' column to handle Arabic search
                    $q->where('name', 'like', '%'.$this->name.'%')
                        ->orWhere('email', 'like', $this->name);
                });
            })
            ->when($this->job_id, function ($query) {
                $query->where('job_id', $this->job_id);
            })
            ->when($this->startDate, function ($query) {
                // Assuming join date is `date_of_hiring` from the view
                $query->whereDate('date_of_hiring', '>=', Carbon::parse($this->startDate));
            })
            ->when($this->endDate, function ($query) {
                $query->whereDate('date_of_hiring', '<=', Carbon::parse($this->endDate));
            })
            ->with('job')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(20);

        $jobs = Job::all();

        return view('livewire.employees-table', [
            'employees' => $employees,
            'jobs' => $jobs,
        ]);
    }
}
