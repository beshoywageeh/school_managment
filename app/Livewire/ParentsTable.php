<?php

namespace App\Livewire;

use App\Models\My_parents;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ParentsTable extends Component
{
    use WithPagination;

    #[Url]
    public $Search = '';

    public function render()
    {
        $data['parents'] = My_parents::Search($this->Search)->with('students')->paginate(10);

        return view('livewire.parents-table', ['data' => $data]);
    }
}