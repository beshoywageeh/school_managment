@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }} : {{trans('general.resign')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>    {{ trans('employees.title') }} : {{trans('general.resign')}}</h4>
                        </div>
                        <div class="col text-md-right">

                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('employees-list')
                            <table class="table table-striped table-bordered table-sm"
                                   id="datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('employees.code') }}</th>
                                    <th>{{ trans('employees.name') }}</th>
                                    <th>{{ trans('employees.learning') }}</th>
                                    <th>{{ trans('employees.grade_year') }}</th>
                                    <th>{{ trans('employees.join_date') }}</th>
                                    <th>{{ trans('employees.birth_date') }}</th>
                                    <th>{{ trans('general.resign') }}</th>
                                    <th>{{ trans('general.actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td>{{ $employee->code }}</td>
                                        <td>{{ $employee->name }}
                                        </td>
                                        <td> {{ $employee->learning }}</td>
                                        <td>{{ $employee->grade_year }}</td>
                                        <td>{{ $employee->date_of_hiring }}</td>
                                        <td>{{ $employee->date_of_birth }}</td>
                                        <td>{{ $employee->deleted_at->format('Y-m-d') }}</td>
                                        <td>
                                            <x-dropdown-table :buttonText="trans('general.actions')"
                                                              :items="[
                                                [
                                                    'type'=>'link',
                                                    'url' => route('employees.return', $employee->id),
                                                    'text' => trans('general.return'),
                                                    'icon' => 'ti-reload',

                                                    'can'=>'employees-delete'
                                                ],

                                            ]"/>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @endpush
@endsection
