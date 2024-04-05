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
    public $page;
    public function mount($page=null){$this->page=$page;}
    public function render()
    {
        return view('livewire.Student.index');
    }
}