<?php

namespace App\Livewire;

use App\Models\class_room;
use App\Models\Grade;
use Livewire\Component;
use Livewire\WithPagination;
class ClassRooms extends Component
{
    use WithPagination;
    public $grade_id;

    public $Class_Name;

    public $editId;

    public $EditName;
    public $page;
    public function mount($page=null){$this->page=$page;}

    public function CreateNewClassRoom()
    {
        $this->validate([
            'Class_Name' => 'required',
        ]);
        try {
            class_room::create([
                'class_name' => $this->Class_Name,
                'grade_id' => $this->grade_id,
                'user_id' => \Auth::Id(),
            ]);
            $this->reset(['grade_id', 'Class_Name']);
            flash()->addSuccess(trans('general.success'));
        } catch (\Exception $e) {
            flash()->addsuccess($e);
            //  session()->flash('error',$e);
        }
    }

    public function Delete($id)
    {
        try {
            class_room::destroy($id);
            flash()->addSuccess(trans('general.success'));
        } catch (\Exception $e) {
            flash()->addsuccess($e);

        }

    }

    public function Edit($id)
    {
        $this->editId = $id;
        $this->EditName = class_room::find($id)->class_name;
    }

    public function CancelEdit()
    {
        $this->reset('editId', 'EditName');
    }

    public function UpdateClassRoom()
    {
        try {
            $this->validate([
                'EditName' => 'required',
            ]);
            class_room::findorfail($this->editId)->update([
                'class_name' => $this->EditName,
            ]);
            $this->CancelEdit();
            flash()->addSuccess(trans('general.success'));
        } catch (\Exception $e) {
            flash()->addSuccess($e);

        }

    }

    public function render()
    {
        $data['class_rooms'] = class_room::with(['user', 'grade'])->withCount('students')->orderBy('grade_id', 'asc')->paginate(10);
        $data['grades'] = Grade::get();
        
        return view('livewire.ClassRooms.index', ['data' => $data]);
    }
}