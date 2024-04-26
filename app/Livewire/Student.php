<?php

namespace App\Livewire;
use App\Models\Student as ModelsStudent;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;
class Student extends Component
{
    use WithPagination;
    public $title = 'students';
    #[Url]
    public $Search = '';
    #[Title('student')]
    public function render()
    {
        return view('livewire.Student.index', ['title' => $this->title]);
    }
}