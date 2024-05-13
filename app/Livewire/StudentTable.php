<?php

namespace App\Livewire;

use App\Enums\UserGender;
use App\Models\{Grade,Student};
use PowerComponents\LivewirePowerGrid\{Column,Footer,Header,PowerGrid,PowerGridColumns,PowerGridComponent,PowerGridFields};
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Collection;

final class StudentTable extends PowerGridComponent
{
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

    public function datasource(): Collection
    {
        return Student::with('grade')->get();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('link_name', function (Student $model) {
                return '<a class="btn btn-primary" href="'.route('Students.show',e($model->id)).'">'.e($model->name).'</a>';
            })
            ->addColumn('gen',function(Student $model){
                return $model->gender;
            })
            ->addColumn('student_grade_name',function(Student $model){
                return $model->grade->name;
            });
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('address')
            ->add('gen')
            ->add('grade');
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
            // Column::add()
            //     ->title(trans('student.gender'))
            //      ->field('gen','gen')
            //     ->sortable()
            //     ->searchable(),
            Column::add()
                ->title(trans('Grades.name'))
                ->field('student_grade_name','grade_id')
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
            Filter::select('student_grade_name', 'grade')
                ->dataSource(Grade::all())
                ->optionLabel('name')
                ->optionValue('id'),
                Filter::enumSelect('gender','gender')
                ->dataSource(UserGender::cases())
                ->optionLabel('gender')

        ];
    }
  }
