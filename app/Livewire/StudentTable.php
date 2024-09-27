<?php

namespace App\Livewire;

use App\Models\class_room;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

final class StudentTable extends PowerGridComponent
{
    public string $primaryKey = 'students.id';

    public string $sortField = 'students.name';

    public bool $multiSort = true;

    public bool $showFilters = true;

    public bool $deferLoading = true;

    public string $loadingComponent = 'components.my-custom-loading';

    public function setUp(): array
    {
        return [
            Header::make()
                ->withoutLoading()
                ->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Collection
    {
        $id = \Auth::id();
        if (Auth::user()->hasRole('Admin')) {
            return Student::with('grade:id,name', 'classroom:id,name', 'parent:id,Father_Name')->get();

        } else {
            $grade = DB::Table('teacher_grade')->where('teacher_id', $id)->pluck('grade_id');

            return Student::whereIn('grade_id', $grade)->with('grade:id,name', 'classroom:id,name', 'parent:id,Father_Name')->get();

        }

    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name', fn ($model) => '<a class="btn btn-link" href="'.route('Students.show', e($model->id)).'">'.e($model->name).'</a>')
            ->add('parent', fn ($model) => $model->parent->Father_Name)
            ->add('address')
            ->add('join_date')
            ->add('birth_date')
            ->add('grade', fn ($model) => $model->grade->name)
            ->add('class', fn ($model) => $model->classroom->name);

    }

    public function columns(): array
    {
        return [
            Column::make('#', 'id')->index(),
            Column::add()
                ->title(trans('student.name'))
                ->field('name')
                ->sortable()
                ->searchable(),
            Column::add()
                ->title(trans('Parents.Father_Name'))
                ->field('parent')
                ->sortable()
                ->searchable(),
            Column::add()
                ->title(trans('student.address'))
                ->field('address')
                ->sortable()
                ->searchable(),
            Column::add()
                ->title(trans('student.join_date'))
                ->field('join_date'),
            Column::add()
                ->title(trans('student.birth_date'))
                ->field('birth_date'),
            Column::add()
                ->title(trans('student.grade'))
                ->field('grade')
                ->sortable()
                ->searchable(),
            Column::add()
                ->title(trans('student.class'))
                ->field('class')
                ->sortable()
                ->searchable(),
            Column::action(trans('General.actions')),
        ];
    }

    public function actionsFromView($row): View
    {
        return view('components.student_-table_-action', ['row' => $row]);
    }

    public function filters(): array
    {
        return [
            Filter::inputText('name')->operators(['contains']),
            Filter::inputText('parent')->operators(['contains']),
            Filter::select('grade', 'grade_id')
                ->dataSource(Grade::all())
                ->optionLabel('name')
                ->optionValue('id'),
            Filter::select('class', 'classroom_id')
                ->dataSource(class_room::all())
                ->optionLabel('name')
                ->optionValue('id'),
        ];
    }
}
