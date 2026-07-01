@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }} | {{ trans('general.show') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-semibold text-gray-800">{{ $user->name }}</h4>
            <button class="px-4 py-2 bg-cyan-500 text-white rounded-lg hover:bg-cyan-600 font-medium" onclick="printDiv()">{{ trans('general.print') }}</button>
        </div>
        <div id="print" class="p-6">
            @can('employees-list')
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.code') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.name') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.learning') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.grade_year') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.join_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.birth_date') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.job') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-gray-800">{{ $user->code }}</td>
                                <td class="px-4 py-2 text-gray-800 font-medium">{{ $user->name }}</td>
                                <td class="px-4 py-2 text-gray-600"> {{ $user->learning }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $user->grade_year }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $user->date_of_hiring }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $user->date_of_birth }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $user->job->name ?? 'N/A' }}</td>
                            </tr>
                        </tbody>
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.insurance_status') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('employees.insurance_number') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase" colspan="2">{{ trans('employees.insurance_date') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-gray-800">{{ $user->insurance == 0 ? trans('general.no_tammen') : trans('general.ok_tammen') }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $user->insurance_number }}</td>
                                <td class="px-4 py-2 text-gray-600" colspan="2">{{ $user->insurance_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endcan
        </div>
    </div>

@endsection
