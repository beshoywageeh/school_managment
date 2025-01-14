@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('employees.title') }}</h4>
                        </div>
                        <div class="col text-md-right">
                            @can('employees-create')
                                <a href="{{ route('employees.create') }}"
                                   class="btn btn-success">
                                    <i class="ti-plus"></i>
                                    {{ trans('general.new') }}
                                </a>
                            @endcan
                            @can('employees-import_Excel')
                                <button type="button"
                                        class="btn btn-primary"
                                        data-target="#Import_Excel"
                                        data-toggle="modal"><i class="ti-upload"></i>
                                    {{ trans('general.Import_Excel') }}</button>
                                @include('backend.employees.import')
                            @endcan
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
                                    <th>{{ trans('employees.job') }}</th>
                                    <th>{{ trans('general.actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td>{{ $employee->code }}</td>
                                        <td><a target='_blank'
                                               href="{{ route('employees.show', $employee->id) }}">{{ $employee->name }}</a>
                                        </td>
                                        <td> {{ $employee->learning }}</td>
                                        <td>{{ $employee->grade_year }}</td>
                                        <td>{{ $employee->date_of_hiring }}</td>
                                        <td>{{ $employee->date_of_birth }}</td>
                                        <td>{{ $employee->job->name ?? 'N/A' }}</td>
                                        <td>
                                            <x-dropdown-table :buttonText="trans('general.actions')"
                                                              :items="[
                                                [
                                                    'type'=>'link',
                                                    'url' => route('employees.destroy', $employee->id),
                                                    'text' => trans('general.resign'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can'=>'employees-delete'
                                                ],
                                                [
                                                    'type'=>'link',
                                                    'url' => route('employees.show', $employee->id),
                                                    'text' => trans('general.info'),
                                                    'icon' => 'ti-info-alt',
                                                    'target' => '_blank',
                                                    'can'=>'employees-info'
                                                ],
                                                [
                                                    'type'=>'link',
                                                    'url' => route('employees.edit', $employee->id),
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil',
                                                    'target' => '_blank',
                                                    'can'=>'employees-edit'
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
