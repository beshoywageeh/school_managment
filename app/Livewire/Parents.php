<?php

namespace App\Livewire;

use App\Models\My_parents;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class Parents extends Component
{
    use WithPagination;

    public $show_table = true;

    public $update_mode = false;

    #[validate]
    public $Father_Name;

    public $Father_Phone;

    public $Father_Job;

    public $Father_National_Id;

    public $Father_Birth_Date;

    public $Mother_Name;

    public $Mother_Phone;

    public $Mother_Job;

    public $Mother_National_Id;

    public $Mother_Birth_Date;

    public $Address;

    public $Religion;

    public $Father_Learning;

    public $id;

    #[Url]
    public $Search = '';
    public $page;
    public function mount($page)
    {
        $this->page = $page;
    }
    public function rules()
    {
        return [
            'Father_Name' => 'required',
            'Mother_National_Id' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'Father_Phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Father_National_Id' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'Mother_Phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Mother_Job' => 'nullable|string|min:2|max:20',
            'Father_Job' => 'nullable|string|min:2|max:20',
            'Religion' => 'nullable|string|min:2|max:20',
            'Father_Learning' => 'nullable|string|min:2|max:20',
            'Address' => 'nullable|string|min:2|max:100',
        ];
    }

    public function messages()
    {
        return [
            'Father_Name.required' => trans('Parents.Father_required'),
            'Mother_National_Id.required' => trans('Parents.Mother_required'),
            'Mother_National_Id.string' => trans('Parents.Mother_string'),
            'Mother_National_Id.min' => trans('Parents.Mother_min'),
            'Mother_National_Id.max' => trans('Parents.Mother_max'),
            'Mother_National_Id.regex' => trans('Parents.Mother_regex'),
            'Father_Phone.regex' => trans('Parents.Father_phone'),
            'Father_Phone.min' => trans('Parents.Father_min'),
            'Mother_Phone.regex' => trans('Parents.Mother_phone'),
            'Mother_Phone.min' => trans('Parents.Mother_min'),
            'Mother_Job.string' => trans('Parents.Mother_string'),
            'Mother_Job.min' => trans('Parents.Mother_min'),
            'Mother_Job.max' => trans('Parents.Mother_max'),
            'Father_Job.string' => trans('Parents.Father_string'),
            'Father_Job.min' => trans('Parents.Father_min'),
            'Father_Job.max' => trans('Parents.Father_max'),
            'Father_Learning.string' => trans('Parents.Learning_string'),
            'Father_Learning.min' => trans('Parents.Learning_min'),
            'Father_Learning.max' => trans('Parents.Learning_max'),
            'Address.string' => trans('Parents.Address_string'),
            'Address.min' => trans('Parents.Address_min'),
            'Address.max' => trans('Parents.Address_max'),
        ];
    }

    public function create_mode()
    {
        if ($this->show_table) {
            $this->show_table = false;
        } else {
            $this->show_table = true;
        }
    }

    public function Edit(My_parents $Parent)
    {
        if ($this->show_table) {
            $this->show_table = false;
            $this->update_mode = true;
            $this->Father_Name = $Parent->Father_Name;
            $this->Father_Phone = $Parent->Father_Phone;
            $this->Father_Job = $Parent->Father_Job;
            $this->Father_National_Id = $Parent->Father_National_Id;
            $this->Father_Birth_Date = $Parent->Father_Birth_Date;
            $this->Mother_Name = $Parent->Mother_Name;
            $this->Mother_Phone = $Parent->Mother_Phone;
            $this->Mother_Job = $Parent->Mother_Job;
            $this->Mother_National_Id = $Parent->Mother_National_Id;
            $this->Mother_Birth_Date = $Parent->Mother_Birth_Date;
            $this->Address = $Parent->Address;
            $this->Religion = $Parent->Religion;
            $this->Father_Learning = $Parent->Father_Learning;
            $this->id = $Parent->id;
        } else {
            $this->show_table = true;
            $this->update_mode = false;
            $this->reset();
        }
    }

    public function UpdateParent()
    {
        try {
            $validated = $this->validate();
            My_parents::find($this->id)->update([
                'Father_Name' => $this->Father_Name,
                'Father_Phone' => $this->Father_Phone,
                'Father_Job' => $this->Father_Job,
                'Father_National_Id' => $this->Father_National_Id,
                'Father_Birth_Date' => $this->Father_Birth_Date,
                'Mother_Name' => $this->Mother_Name,
                'Mother_Phone' => $this->Mother_Phone,
                'Mother_Job' => $this->Mother_Job,
                'Mother_National_Id' => $this->Mother_National_Id,
                'Mother_Birth_Date' => $this->Mother_Birth_Date,
                'Address' => $this->Address,
                'Religion' => $this->Religion,
                'Father_Learning' => $this->Father_Learning,
            ]);
            $this->reset();

            flash()->addSuccess(trans('general.success'));
            $this->show_table = true;
        } catch (\Exception $e) {
            flash()->addError($e);
        }
    }

    public function NewParent()
    {
        try {
            $validated = $this->validate();
            My_parents::create([
                'Father_Name' => $this->Father_Name,
                'Father_Phone' => $this->Father_Phone,
                'Father_Job' => $this->Father_Job,
                'Father_National_Id' => $this->Father_National_Id,
                'Father_Birth_Date' => $this->Father_Birth_Date,
                'Mother_Name' => $this->Mother_Name,
                'Mother_Phone' => $this->Mother_Phone,
                'Mother_Job' => $this->Mother_Job,
                'Mother_National_Id' => $this->Mother_National_Id,
                'Mother_Birth_Date' => $this->Mother_Birth_Date,
                'Address' => $this->Address,
                'Religion' => $this->Religion,
                'user_id' => \Auth::Id(),
                'Father_Learning' => $this->Father_Learning,
            ]);
            $this->reset();

            flash()->addSuccess(trans('general.success'));
            $this->show_table = true;
        } catch (\Exception $e) {
            flash()->addError($e);
        }
    }

    public function Delete($id)
    {
        try {
            My_parents::find($id)->delete();
            $this->reset();
            flash()->addSuccess(trans('general.success'));
        } catch (\Exception $e) {
            flash()->addError($e);
        }
    }

    public function render()
    {
        $data['parents'] = My_parents::Search($this->Search)->with('Student')->paginate(10);

        return view('livewire.parents.parents', ['data' => $data]);
    }
}
