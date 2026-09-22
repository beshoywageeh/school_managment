@extends('layouts.app')
@section('title')
    {{ trans('fee_invoice.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('fee_invoice.title') }}</h4>
        </div>

        @can('fee_invoice-list')
        <x-filters action="{{ route('fee-invoice.index') }}" reset="{{ route('fee-invoice.index') }}" searchName="students" placeholder="{{ trans('fee_invoice.name') }}">
            <div>
                <x-input-label>@lang('fee_invoice.grade')</x-input-label>
                <select name="grade_id"
                    class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach ($gradeOptions as $id => $name)
                        <option value="{{ $id }}" {{ request('grade_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </x-filters>
        <div class="container mx-auto p-6">
    
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                    <tr>
                         <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                         <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{trans('fee_invoice.date')}}</th>
                         <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{trans('fee_invoice.name')}}</th>
                         <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{trans('fee_invoice.debit')}}</th>
                         <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{trans('fee_invoice.grade')}}</th>
                         <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{trans('fee_invoice.class')}}</th>
                          <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{trans('fee_invoice.acadmic')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($feeInvoices as $feeInvoice )
                     <tr class="hover:bg-gray-50">
                         <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $feeInvoices->firstItem() + $loop->index }}</td>
                         <td class="px-6 py-4 text-center text-sm text-gray-600">{{$feeInvoice->invoice_date}}</td>
                         <td class="px-6 py-4 text-center text-sm text-gray-600">{{$feeInvoice->student->fullName()}}</td>
                         <td class="px-6 py-4 text-center text-sm text-gray-600">{{Number::currency($feeInvoice->schoolFee->amount,config('school.currency'),'ar')}}</td>
                         <td class="px-6 py-4 text-center text-sm text-gray-600">{{$feeInvoice->grade->name}}</td>
                         <td class="px-6 py-4 text-center text-sm text-gray-600">{{$feeInvoice->classroom->name}}</td>
                         <td class="px-6 py-4 text-center text-sm text-gray-600">{{$feeInvoice->acd_year->view}}</td>
                        </tr>
                    @empty
                          <tr>
                            <td colspan="10" class="px-6 py-12 text-center">
                                <div class="bg-blue-50 text-blue-600 px-4 py-3 rounded-lg inline-block">
                                    {{ trans('general.Msg') }}
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div>
                {{ $feeInvoices->withQueryString()->links() }}
            </div>
        </div>

        @endcan
    @endsection
