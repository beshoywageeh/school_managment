@extends('layouts.app')
@section('title')
    {{ trans('Recipt_Payments.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('Recipt_Payments.title') }}</h4>
        </div>

        @can('Recipt_Payment-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Recipt_Payments.maual') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Recipt_Payments.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Recipt_Payments.amount') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($Recipt_Payments as $Recipt_Payment)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $Recipt_Payment->manual }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ \Carbon\Carbon::parse($Recipt_Payment->date)->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                @can('Recipt_Payment-info')
                                <a target="_blank" href="{{ route('receipt_payment.show', $Recipt_Payment->student->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    {{ $Recipt_Payment->student->name }}
                                </a>
                                @endcan
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ Number::currency($Recipt_Payment->Debit, 'EGP', 'ar') }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    @can('Recipt_Payment-info')
                                    <a href="{{ route('receipt_payment.show', $Recipt_Payment->id) }}" target="_blank" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="{{ trans('general.info') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('Recipt_Payment-edit')
                                    <a href="{{ route('receipt_payment.edit', $Recipt_Payment->id) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('general.edit') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('Recipt_Payment-delete')
                                    <form action="{{ route('receipt_payment.destroy', $Recipt_Payment->id) }}" method="POST" class="inline">
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

            @if($Recipt_Payments->hasPages())
            <div class="p-4 border-t border-gray-100 flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    Showing {{ $Recipt_Payments->firstItem() ?? 0 }} to {{ $Recipt_Payments->lastItem() ?? 0 }} of {{ $Recipt_Payments->total() }} results
                </div>
                <div class="flex gap-1">
                    {{ $Recipt_Payments->links() }}
                </div>
            </div>
            @endif
        @endcan
    </div>
@endsection