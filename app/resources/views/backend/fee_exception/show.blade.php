@extends('layouts.app')
@section('title')
    {{ trans('ExcptionFee.title') }} | {{ trans('general.show') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('ExcptionFee.title') }}</h4>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-center">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('Recipt_Payments.name') }}</th>
                            <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('academic_year.title') }}</th>
                            <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.name') }}</th>
                            <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.title') }}</th>
                            <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('Recipt_Payments.amount') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($excptionFees as $ExcptionFee)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-gray-600">{{ $loop->index + 1 }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ \Carbon\Carbon::parse($ExcptionFee->date)->format('Y-m-d') }}</td>
                                <td class="px-4 py-2 text-gray-800">{{ $ExcptionFee->students->name }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $ExcptionFee->academic_year->view }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $ExcptionFee->grade->name }}</td>
                                <td class="px-4 py-2 text-gray-600">{{ $ExcptionFee->classroom->name }}</td>
                                <td class="px-4 py-2 text-gray-800 font-medium">{{ Number::currency($ExcptionFee->amount, 'EGP', 'ar') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection