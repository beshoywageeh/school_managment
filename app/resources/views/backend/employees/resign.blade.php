@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }} : {{ trans('general.resign') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-bold text-gray-800"> {{ trans('employees.title') }} : {{ trans('general.resign') }}</h4>
        </div>
        <div class="p-6">
            @can('employees-list')
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm" id="datatable">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.code') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.name') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.learning') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.grade_year') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.join_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.birth_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.resign') }}</th>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($employees as $employee)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-center text-gray-600"> {{ $loop->iteration }}</td>
                                    <td class="px-4 py-2 text-gray-800">{{ $employee->code }}</td>
                                    <td class="px-4 py-2 text-gray-800 font-medium">{{ $employee->name }}</td>
                                    <td class="px-4 py-2 text-gray-600"> {{ $employee->learning }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->grade_year }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->date_of_hiring }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->date_of_birth }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $employee->deleted_at->format('Y-m-d') }}</td>
                                    <td class="px-4 py-2 text-center">
                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                            [
                                                'type' => 'link',
                                                'url' => route('employees.return', $employee->id),
                                                'text' => trans('general.return'),
                                                'icon' => 'ti-reload',
                                                'can' => 'employees-delete',
                                            ],
                                        ]" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endcan
        </div>
    </div>

@endsection
