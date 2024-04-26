<?php

namespace App\Livewire\Grades;

use Livewire\Component;
use App\Models\Grade;

class GradesTable extends Component
{
    public $Grade_Name = ' ';

    public $editId;

    public $EditName;
    public $reportview = false;

    public $report_data = null;
    public function Information($id)
    {
        $this->reportview = true;
        $this->report_data = Grade::where('id', $id)->with(['class_room', 'class_room.students'])->withCount(['class_room', 'students'])->first();
        //  dd($this->report_data->class_room);
    }
    public function render()
    {
        $data['grades'] = Grade::with('user')->withCount(['class_room', 'students'])->withSum('fees', 'amount')->paginate(10);
        return view('livewire.grades.grades-table', ['data' => $data]);
    }
}
