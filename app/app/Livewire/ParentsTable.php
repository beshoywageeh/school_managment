<?php

namespace App\Livewire;

use App\Models\MyParent;
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
        $stdParents = MyParent::with('Students')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->whererelation(
                        'students',
                        'name',
                        'like',
                        '%' . $this->search . '%',
                    )->orWhere(
                        'parents.father_name',
                        'like',
                        '%' . $this->search . '%',
                    );
                });
            })
            ->paginate(config('school.per_page'));

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
        $d = MyParent::withCount('Students')->findorfail($id);
        if ($d->Students_count == 0) {
            $d->delete();
            $this->logActivity(
                trans('log.actions.deleted'),
                trans('log.models.parent.deleted', [
                    'name' => $d->father_name,
                ]),
            );
            session()->flash('success', trans('general.deleted'));
        }
        session()->flash('info', trans('Parents.cannotdeleteparents'));

        return redirect()->route('parents.index');
    }
}
