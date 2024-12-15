<?php

namespace App\DataTables;

use App\Models\Student;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class StudentDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->setRowId('id')
            ->addColumn('std_fullname', function ($query) {
                return $query->name.' '.$query->parent->father_name;
            })
            ->addColumn('action', 'components.student_-table_-action');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Student $model): QueryBuilder
    {
        return $model->newQuery()->with('parent:id,father_name', 'classroom:id,name', 'grade:id,name');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('student-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Blfrtip')
            ->orderBy(1)
            ->parameters([
                'language' => [
                    'url' => asset('assests/ar.json'),
                ],
            ])->lengthMenu([[20, 40, 50, -1], [20, 40, 50, trans('General.all')]])
            ->buttons([Button::make('csv'),
                Button::make('print'),
                Button::make('reload')->text('<i class="fa fa-refresh"></i>'),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id', 'id')->title('#')->orderable(false),
            Column::make('code')->title(trans('student.code')),
            Column::make('std_fullname')->title(trans('student.name')),
            Column::make('grade.name')->title(trans('student.grade')),
            Column::make('classroom.name')->title(trans('student.class')),
            Column::make('birth_date')->title(trans('student.birth_date')),
            Column::make('address')->title(trans('student.address')),
            Column::make('national_id')->title(trans('student.national_id')),
            Column::computed('action')
                ->title(trans('General.actions'))
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Student_'.date('YmdHis');
    }
}
