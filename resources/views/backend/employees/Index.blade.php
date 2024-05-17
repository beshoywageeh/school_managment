@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }}
@endsection
@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="flex justify-between mb-4">
                    <h4 class="card-title">{{ trans('employees.title') }}</h4>
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">
                        <i data-feather="plus-square"></i>
                        {{ trans('general.new') }}
                    </a>
                </div>
                <div class="table-resposive">
                    <table class="table table-striped table-bordered" id="datatable-filter">
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
                                    <td> {{ $employees->firstItem() + $loop->index }}</td>
                                    <td>{{ $employee->code }}</td>
                                    <td><a target='_blank'
                                            href="{{ route('employees.show', $employee->id) }}">{{ $employee->name }}</a>
                                    </td>
                                    <td> {{ $employee->name }}</td>
                                    <td>{{ $employee->grade_year }}</td>
                                    <td>{{ $employee->date_of_hiring }}</td>
                                    <td>{{ $employee->date_of_birth }}</td>
                                    <td>{{ $employee->job->name ?? 'N/A' }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="items-center dropdown-toggle btn btn-primary btn-xs"><i
                                                    class="w-4" data-feather="chevron-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <ul class="dropdown-list">
                                                    <li class="dropdown-list-item">
                                                        <a class="dropdown-link"
                                                            href="{{ route('employees.edit', $employee->id) }}">
                                                            <i class="w-4" data-feather="edit"></i>
                                                            {{ trans('general.edit') }}
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-list-item">
                                                        <a href="{{ route('employees.destroy', $employee->id) }}"
                                                            class="dropdown-link" onclick="confirmation(event)"><i
                                                                class="w-4" data-feather="trash-2"></i>
                                                            {{ trans('general.delete') }}</a>
                                                    </li>
                                                    <li class="dropdown-list-item">
                                                        <a target="_blank"
                                                            href="{{ route('employees.show', $employee->id) }}"
                                                            class="dropdown-link">
                                                            <i class="w-4" data-feather="info"></i>
                                                            {{ trans('general.info') }} </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $employees->links('components.Paginatortion') }}
            </div>
        </div>
        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function confirmation(ev) {
                    ev.preventDefault();
                    const urlToRedirect = ev.currentTarget.getAttribute('href');
                    console.log(urlToRedirect);
                    Swal.fire({
                        title: "{{ trans('general.confirm') }}",
                        text: "{{ trans('general.confirmation') }}",
                        icon: "warning",
                        showConfirmButton: true,
                        shoCancelButton: true,
                        dangerMode: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = urlToRedirect;
                        }
                    });
                }
            </script>
        @endpush
    @endsection
