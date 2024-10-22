<?php

namespace App\DataTables;

use App\Models\My_parents;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ParentsDataTable extends DataTable
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
            ->addColumn('action', 'components.parent_table_action');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(My_parents $model): QueryBuilder
    {
        return $model->newQuery()->withCount('students');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('parents-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Blfrtip')
            ->orderBy(1)
            ->parameters([
                'language' => [
                    'url' => asset('assests/ar.json'),
                ],
            ])->lengthMenu([[20, 40, 50, -1], [20, 40, 50, trans('General.all')]])
            ->selectStyleSingle()
            ->buttons([
                Button::make('csv'),
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

            Column::make('id')->title('#'),
            Column::make('Father_Name')->title(trans('Parents.Father_Name')),
            Column::make('Father_Phone')->title(trans('Parents.Father_Phone')),
            Column::make('Father_Job')->title(trans('Parents.Father_Job')),
            Column::make('Mother_Name')->title(trans('Parents.Mother_Name')),
            Column::make('Mother_Phone')->title(trans('Parents.Mother_Phone')),
            Column::make('Address')->title(trans('Parents.Address')),
            Column::make('students_count')->title(trans('Parents.children_count'))->searchable(false),
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
        return 'Parents_'.date('YmdHis');
    }
}
