<?php

namespace App\Livewire\Grades;

use App\Models\class_room;
use App\Models\Grade;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class Grades extends Component
{
    use WithPagination;

    public $Grade_Name = ' ';

    public $editId;

    public $EditName;
    public $title = 'grades';
    #[Title('Grades')]
    public $reportview = false;

    public $report_data = null;
    public function CreateNewGrade()
    {
        try {
            $this->validate([
                'Grade_Name' => 'required',
            ]);
            Grade::create([
                'Grade_Name' => $this->Grade_Name,
                'user_id' => \Auth::Id(),
            ]);
            $this->reset(['Grade_Name']);
            flash()->addSuccess(trans('general.success'));
        } catch (Exception $e) {
            flash()->addError($e);
        }
    }

    public function Delete($id)
    {
        try {

            $classrooms = class_room::where('grade_id', $id)->count();
            if ($classrooms == 0) {
                Grade::destroy($id);
                flash()->addSuccess(trans('general.success'));
            } else {
                flash()->addError(trans('general.error_delete'));
            }
        } catch (Exception $e) {
            flash()->addError($e);
        }
    }

    public function Edit($id)
    {
        $this->editId = $id;
        $this->EditName = Grade::find($id)->Grade_Name;
    }

    public function CancelEdit()
    {
        $this->reset('editId', 'EditName');
    }

    public function UpdateGrade()
    {
        try {
            $this->validate([
                'EditName' => 'required',
            ]);
            Grade::findorfail($this->editId)->update([
                'Grade_Name' => $this->EditName,
            ]);
            $this->CancelEdit();
            flash()->addSuccess(trans('general.success'));
        } catch (Exception $e) {
            flash()->addError($e);
        }
    }
    public function Information($id)
    {
        $this->reportview = true;
        $this->report_data = Grade::where('id', $id)->with(['class_room', 'class_room.students'])->withCount(['class_room', 'students'])->first();
        //  dd($this->report_data->class_room);
    }
    public function render()
    {

        return view('livewire.Grades.index', ['title' => $this->title]);
    }
}