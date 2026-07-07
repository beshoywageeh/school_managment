@extends('layouts.app')

@section('content')
    <div class="px-2 overflow-x-auto">
        <table class="w-full border border-black border-collapse text-center text-xs">
            <thead>
                <tr class="bg-gray-100">
                    <th rowspan="2" class="border border-black px-2 py-1.5 font-bold">#</th>
                    <th rowspan="2" class="border border-black px-2 py-1.5 font-bold">{{ trans('student.name') }}</th>
                    <th colspan="3" class="border border-black px-2 py-1.5 font-bold">{{ trans('student.birth_date') }}</th>
                    <th colspan="3" class="border border-black px-2 py-1.5 font-bold">{{ trans('student.october') }}</th>
                    <th rowspan="2" class="border border-black px-2 py-1.5 font-bold">{{ trans('student.national_id') }}</th>
                </tr>
                <tr class="bg-gray-50">
                    <th class="border border-black px-2 py-1 font-bold">{{ trans('student.day') }}</th>
                    <th class="border border-black px-2 py-1 font-bold">{{ trans('student.month') }}</th>
                    <th class="border border-black px-2 py-1 font-bold">{{ trans('student.year') }}</th>
                    <th class="border border-black px-2 py-1 font-bold">{{ trans('student.day') }}</th>
                    <th class="border border-black px-2 py-1 font-bold">{{ trans('student.month') }}</th>
                    <th class="border border-black px-2 py-1 font-bold">{{ trans('student.year') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['class_room']->students as $student)
                    @php
                        $age = explode('-', $student->birth_at_begin);
                    @endphp
                    <tr class="even:bg-gray-50 hover:bg-gray-100">
                        <td class="border border-black px-2 py-1">{{ $loop->iteration }}</td>
                        <td class="border border-black px-2 py-1 text-right">{{ $student->name }}</td>
                        <td class="border border-black px-2 py-1">{{ \Carbon\Carbon::parse($student->birth_date)->format('d') }}</td>
                        <td class="border border-black px-2 py-1">{{ \Carbon\Carbon::parse($student->birth_date)->format('m') }}</td>
                        <td class="border border-black px-2 py-1">{{ \Carbon\Carbon::parse($student->birth_date)->format('Y') }}</td>
                        <td class="border border-black px-2 py-1">{{ $age[2] ?? '-' }}</td>
                        <td class="border border-black px-2 py-1">{{ $age[1] ?? '-' }}</td>
                        <td class="border border-black px-2 py-1">{{ $age[0] ?? '-' }}</td>
                        <td class="border border-black px-2 py-1">{{ $student->national_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
