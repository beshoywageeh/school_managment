@extends('layouts.app')
@section('title')
    {{ trans('PaymentParts.title') }}
@endsection

@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('PaymentParts.title') }}</h4>
        </div>

        @can('payment_parts-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Recipt_Payments.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('PaymentParts.status') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Recipt_Payments.amount') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($PaymentParts as $PaymentPart)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ \Carbon\Carbon::parse($PaymentPart->date)->format('Y-m-d') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                <a target="_blank" href="{{ route('payment_parts.show', $PaymentPart->students->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    {{ $PaymentPart->students->name }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                @can('payment_parts-status')
                                <a class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $PaymentPart->status->color() }}"
                                    href="{{ route('payment_parts.pay', $PaymentPart->id) }}">
                                    {{ $PaymentPart->status->lang() }}
                                </a>
                                @endcan
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ number_format($PaymentPart->amount, 2) }}&nbsp;ج.م</td>
                            <td class="px-6 py-4 text-center">
                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                    [
                                        'type' => 'link',
                                        'url' => route('payment_parts.show', $PaymentPart->id),
                                        'text' => trans('general.info'),
                                        'icon' => 'ti-info-alt',
                                        'target' => '_blank',
                                        'can' => 'payment_parts-info',
                                    ],
                                    [
                                        'type' => 'link',
                                        'url' => route('payment_parts.destroy', $PaymentPart->id),
                                        'text' => trans('general.delete'),
                                        'icon' => 'ti-trash',
                                        'onclick' => 'confirmation(event)',
                                        'can' => 'payment_parts-delete',
                                    ],
                                    [
                                        'type' => 'link',
                                        'url' => route('payment_parts.edit', $PaymentPart->id),
                                        'text' => trans('general.edit'),
                                        'icon' => 'ti-pencil',
                                        'can' => 'payment_parts-edit',
                                    ],
                                    [
                                        'type' => 'link',
                                        'url' => route('payment_parts.pay', $PaymentPart->id),
                                        'text' => trans('general.pay'),
                                        'icon' => 'ti-pencil',
                                        'can' => 'payment_parts-pay',
                                    ],
                                ]" />
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <div class="bg-blue-50 text-blue-600 px-4 py-3 rounded-lg inline-block">
                                    {{ trans('general.Msg') }}
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($PaymentParts->hasPages())
            <div class="p-4 border-t border-gray-100 flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    Showing {{ $PaymentParts->firstItem() ?? 0 }} to {{ $PaymentParts->lastItem() ?? 0 }} of {{ $PaymentParts->total() }} results
                </div>
                <div class="flex gap-1">
                    {{ $PaymentParts->links() }}
                </div>
            </div>
            @endif
        @endcan
    </div>
@endsection