@extends('layouts.app')
@section('title')
    {{ trans('fee_invoice.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('fee_invoice.title') }}</h4>
        </div>

        @can('fee_invoice-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fee_invoice.date') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fee_invoice.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created.at') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fee_invoice.debit') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fee_invoice.grade') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fee_invoice.class') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('fee_invoice.acadmic') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($fee_invoices as $fee_invoice)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ \Carbon\Carbon::parse($fee_invoice->invoice_date)->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                <a target="_blank" href="{{ route('students.show', $fee_invoice->student_id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    {{ $fee_invoice->students->name ?? '-' }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee_invoice->created_at->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ number_format($fee_invoice->fees_sum_amount, 2) }} ج.م</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee_invoice->grades->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee_invoice->classes->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $fee_invoice->acd_year->view }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    @can('fee_invoice-info')
                                    <a href="{{ route('fee_invoice.show', $fee_invoice->id) }}" target="_blank" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="{{ trans('general.info') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('fee_invoice-edit')
                                    <a href="{{ route('fee_invoice.edit', $fee_invoice->id) }}" target="_blank" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('general.edit') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('fee_invoice-delete')
                                    <form action="{{ route('fee_invoice.destroy', $fee_invoice->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($fee_invoices->hasPages())
            <div class="p-4 border-t border-gray-100 flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    Showing {{ $fee_invoices->firstItem() ?? 0 }} to {{ $fee_invoices->lastItem() ?? 0 }} of {{ $fee_invoices->total() }} results
                </div>
                <div class="flex gap-1">
                    {{ $fee_invoices->links() }}
                </div>
            </div>
            @endif
        @endcan
    </div>
@endsection