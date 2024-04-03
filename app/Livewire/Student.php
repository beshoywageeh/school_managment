<?php

namespace App\Livewire;

use App\Models\Student as ModelsStudent;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attribute\Url;
class Student extends Component
{
    use WithPagination;
    #[Url]
    public $Search = '';
    public function render()
    {
        $data['students']=ModelsStudent::Search($this->Search)->with(['user','classroom','parent'])->paginate(10);
       
        return view('livewire.Student.index',['data'=>$data]);
    }
}