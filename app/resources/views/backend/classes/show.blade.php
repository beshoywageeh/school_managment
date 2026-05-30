@extends('layouts.app')
@section('title')
    {{ trans('general.info') }}
@endsection
@push('css')
    <style>
        body {
            font-size: 0.875rem;
        }

        .data-table {
            border: 1px solid black !important;

            border-collapse: collapse;
        }

        .data-table td,
        .data-table th {
            border: 1px solid black !important;
            border-collapse: collapse;
        }
    </style>
@endpush
@section('content')
    <div class="flex flex-wrap">
        <div class="flex-1">
            <div class="mb-4 bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="px-6 py-4 border-b border-gray-200">
                    <div class="flex flex-wrap">
                        <div class="flex-1">{{ $class->title }}</div>
                        <div class="text-right flex-1">
                            <x-button class="primary" type="button" onclick="printDiv()">{{ trans('general.print') }}</x-button>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="overflow-x-auto" id="print">
                        <table class="data-table w-full">
                            <tr>
                                <th>{{ $class->title }}</th>
                                <th>{{ $class->grade->name }}</th>
                                <th>{{ $class->class_room->name }}</th>
                            </tr>
                        </table>
                        <table class="data-table w-full">
                            <tr>
                                <th>#</th>
                                <th>{{ trans('student.name') }}</th>
                                <th>{{ trans('student.gender') }}</th>
                                <th>{{ trans('student.religion') }}</th>
                            </tr>
                            <tbody>
                                @foreach ($class->students as $student)
                                    <tr>
                                        <th>{{ $loop->index + 1 }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->gender->lang() }}</td>
                                        <td>{{ $student->religion->lang() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <style>
        .data-table th { font-weight: bold; }
    </style>
    @push('scripts')
    @endpush
@endsection
