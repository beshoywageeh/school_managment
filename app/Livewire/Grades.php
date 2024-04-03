<?php

namespace App\Livewire;

use App\Models\class_room;
use App\Models\Grade;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class Grades extends Component
{
    use WithPagination;

    public $Grade_Name = ' ';

    public $editId;

    public $EditName;
    public $page;
public function mount($page){
    $this->page=$page;
}
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

    public function render()
    {
        $data['grades']=Grade::with('user')->withCount(['class_room', 'students'])->paginate(10);
        return view('livewire.Grades.index', ['data' => $data]);
    }
}