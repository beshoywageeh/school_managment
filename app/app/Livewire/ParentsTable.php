<?php

namespace App\Livewire;

use App\Models\My_parents;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;

class ParentsTable extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'bootstrap'; // Assuming bootstrap is used for styling

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $stdParents = My_parents::with('Students')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->whererelation(
                        'students',
                        'name',
                        'like',
                        '%'.$this->search.'%',
                    )->orWhere(
                        'parents.Father_Name',
                        'like',
                        '%'.$this->search.'%',
                    );
                });
            })
            ->paginate(10);

        return view('livewire.parents-table', [
            'students_parents' => $stdParents,
        ]);
    }

    public function show($id)
    {
        return Redirect::route('parents.show', $id);
    }

    public function edit($id)
    {
        return Redirect::route('parents.edit', $id);
    }

    public function delete($id)
    {
        // For delete, I will follow the route defined in web.php, which is a GET request.
        // In a real application, a POST or DELETE request would be preferred for security and idempotence.
        return Redirect::route('parents.destroy', $id);
    }
}
