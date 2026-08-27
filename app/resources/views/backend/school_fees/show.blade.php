@extends('layouts.app')

@section('title')
    {{ trans('report.daily_fee') }}
@endsection

@section('content')
    <div id="print">
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-4">
    <div class="p-4 border-b border-gray-100 flex justify-between items-center">
        <div>
            <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90"
                onClick="printDiv()">{{ trans('report.print') }}</button>
        </div>
        @if ($school->image)
            <img src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                alt="{{ $school->name }}" class="w-10 h-10"/>
        @else
            <img src="{{ asset('assests/images/logo-icon-dark.png') }}" alt="Ischool" class="w-10 h-10"/>
        @endif
        <div class="text-center col-4">
            <h1 class="text-2xl font-bold">{{ trans('report.fee_invoice') }}</h1>
            <p class="mb-0">{{ trans('report.print_date') }} | {{ date('Y-m-d') }}</p>
        </div>
        <div class="col-4">
            {{ $school->name }}<br>
            {{ $school->heading_right }}
        </div>
    </div>
</div>
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-4 border-b border-gray-100 ">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border border-black">#</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border border-black">{{ trans('student.code') }}</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border border-black">{{ trans('student.name') }}</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border border-black">{{ trans('student.class') }}</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase border border-black">{{ trans('student.grade') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">

                    @forelse ($students as $student)
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 text-center text-sm text-gray-600 border border-black">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py-4 text-sm text-center text-gray-800 font-medium border border-black">{{ $student->code }}</td>
                            <td class="px-6 py-4 text-sm text-center text-gray-800 font-medium border border-black">{{ $student->name }}</td>
                            <td class="px-6 py-4 text-sm text-center text-gray-800 font-medium border border-black">{{ $student->classroom->name }}</td>
                            <td class="px-6 py-4 text-sm text-center ext-gray-800 font-medium border border-black">{{ $student->grade->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">{{ trans('report.no_data_found') }}</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th class="border border-black px-6 py-6" colspan="4">{{ trans('report.to_colcet') }}</th>
                        <th  class="border border-black px-6 py-6" >{{ Number::currency($students->count() * $school_fee->amount, config('school.currency'), 'ar') }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>


</div>

@endsection
