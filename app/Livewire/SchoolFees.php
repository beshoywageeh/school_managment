<?php

namespace App\Livewire;

use App\Models\Grade;
use App\Models\school_fee;
use Livewire\Component;
use Livewire\Attributes\On;

class SchoolFees extends Component
{
    public $page;
    public $title = "school_fees.create";
    public $event = 'new_fess';
    public function mount($page)
    {
        $this->page = $page;
    }
    #[On('New_fees')]
    public function updateDataCreate()
    {
        $data['grade'] = Grade::all(['id', 'Grade_Name']);
    }

    public function render()
    {
        $data['fees'] = school_fee::with(['user', 'grade', 'classroom'])->get();
        return view('livewire.school_fees.school-fees', ['data' => $data]);
    }
}
