<?php

namespace App\Livewire;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridColumns;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Illuminate\View\View;
final class StudentTable extends PowerGridComponent
{
    use WithExport;

    public string $primaryKey = 'students.id';

    public string $sortField = 'students.id';

    public bool $multiSort = true;

    public bool $showFilters = true;

    public bool $deferLoading = true; // default false

    public string $loadingComponent = 'components.my-custom-loading';

    public function setUp(): array
    {
        return [
            Header::make()
                ->showToggleColumns()
                ->withoutLoading(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount()
                ->pagination('components.Paginator'),
        ];
    }

    public function datasource(): Builder
    {
        return Student::query()->join('grades', 'students.grade_id', '=', 'grades.id')->select('students.*', 'grades.Grade_Name as GN', 'grades.id as Gid');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('link_name', function (Student $model) {
                return '<a class="btn btn-priamry" href="'.route('Students.show',e($model->id)).'">'.e($model->name).'</a>';
            });
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('address')
            ->add('gender')
            ->add('grades.Grade_Name');
    }

    public function columns(): array
    {
        return [
            Column::make('#', 'id')
                ->sortable()
                ->searchable(),
            Column::add()
                ->title(trans('student.name'))
                ->field('link_name', 'name')
                ->sortable()
                ->searchable(),
            Column::add()
                ->title(trans('student.address'))
                ->field('address', 'address')
                ->sortable()
                ->searchable(),
            Column::add()
                ->title(trans('student.gender'))
                ->field('gender', 'gender')
                ->sortable()
                ->searchable(),
            Column::add()
                ->title(trans('Grades.name'))
                ->field('GN', 'Gid')
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
            Filter::select('GN', 'Grade_Name')
                ->dataSource(Grade::all())
                ->optionLabel('Grade_Name')
                ->optionValue('Grade_Name'),
            Filter::select('gender', 'gender')
                ->dataSource(Student::select('gender')->distinct()->get()->toArray())
                ->optionLabel('gender')
                ->optionValue('gender'),
        ];
    }
  }
