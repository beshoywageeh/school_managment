<?php

namespace App\Livewire;

use App\Models\class_room;
use App\Models\Grade;
use App\Models\school_fee;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class SchoolFees extends Component
{
    use WithPagination;

    public $page;

    public $title = 'school_fees.create';

    public $event = 'New_fees';

    public $grade_id;

    public function mount($page)
    {
        $this->page = $page;
    }

    #[On('New_fees')]
    public function updateDataCreate()
    {

    }

    public function render()
    {
        $data['fees'] = school_fee::with(['user', 'grade', 'classroom'])->paginate(env('PAGINATE_COUNT'));
        $data['grade'] = Grade::all(['id', 'Grade_Name']);
        $data['class_room'] = class_room::where('grade_id', 'LIKE', '%'.$this->grade_id.'%')->get();

        return view('livewire.school_fees.school-fees', ['data' => $data]);
    }
}
