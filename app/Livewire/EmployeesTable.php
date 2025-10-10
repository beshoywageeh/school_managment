<?php

namespace App\Livewire;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeesTable extends Component
{
    use WithPagination;

    public $job_id = 1;

    public function render()
    {
        return view('livewire.employees-table', [
            'employees' => User::where('school_id', Auth::user()->school_id)->where('code', '!=', '000001')->where('job_id', $this->job_id)->with('job')->paginate(20),
            'jobs' => Job::all(),
        ]);
    }
}
