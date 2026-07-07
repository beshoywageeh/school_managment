@extends('layouts.app')
@section('title')
    {{ $item->name }}
@endsection

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <a href="{{ route('inventory.items.index', $item->type?->value ?? 'all') }}" class="inline-flex items-center gap-2 px-4 py-2 text-sm text-gray-600 bg-white rounded-lg border border-gray-200 hover:bg-gray-50">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                {{ trans('general.back') }}
            </a>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800">{{ trans('general.basic_info') }}</h3>
                    </div>
                    <div class="p-6">
                        <dl class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <dt class="text-sm text-gray-500">{{ trans('inventory.name') }}</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900">{{ $item->name }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">{{ trans('inventory.type') }}</dt>
                                <dd class="mt-1">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $item->type?->color() ?? 'bg-gray-100 text-gray-700' }}">
                                        {{ $item->type?->lang() ?? $item->type }}
                                    </span>
                                </dd>
                            </div>
                            @if($item->category)
                            <div>
                                <dt class="text-sm text-gray-500">{{ trans('book_sheet.category') }}</dt>
                                <dd class="mt-1">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $item->category->color() ?? 'bg-gray-100 text-gray-700' }}">
                                        {{ $item->category->lang() ?? $item->category }}
                                    </span>
                                </dd>
                            </div>
                            @endif
                            <div>
                                <dt class="text-sm text-gray-500">{{ trans('inventory.unit') }}</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900">{{ $item->unit ?? '--' }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">{{ trans('inventory.sell_price') }}</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900">{{ number_format($item->sell_price, 2) }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">{{ trans('inventory.cost_price') }}</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900">{{ number_format($item->cost_price, 2) }}</dd>
                            </div>
                            @if($item->grade)
                            <div>
                                <dt class="text-sm text-gray-500">{{ trans('fees.grade') }}</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900">{{ $item->grade->name }}</dd>
                            </div>
                            @endif
                            @if($item->classroom)
                            <div>
                                <dt class="text-sm text-gray-500">{{ trans('fees.classroom') }}</dt>
                                <dd class="mt-1 text-sm font-medium text-gray-900">{{ $item->classroom->name }}</dd>
                            </div>
                            @endif
                            @if($item->description)
                            <div class="md:col-span-2">
                                <dt class="text-sm text-gray-500">{{ trans('inventory.description') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $item->description }}</dd>
                            </div>
                            @endif
                        </dl>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                        <h3 class="text-lg font-bold text-gray-800">{{ trans('inventory.history') }}</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.type') }}</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.quantity') }}</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.balance') }}</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.reference_type') }}</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('inventory.notes') }}</th>
                                    <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($item->transactions ?? [] as $txn)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                                    <td class="px-6 py-4 text-sm">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $txn->type?->color() ?? 'bg-gray-100 text-gray-700' }}">
                                            {{ $txn->type?->lang() ?? $txn->type }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $txn->quantity }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $txn->balance }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ $txn->reference_type }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500 max-w-[200px] truncate">{{ $txn->notes ?? '--' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $txn->created_at?->format('Y-m-d H:i') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-12 text-center">
                                        <div class="bg-blue-50 text-blue-600 px-4 py-3 rounded-lg inline-block">
                                            {{ trans('general.noDataToShow') }}
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800">{{ trans('inventory.current_stock') }}</h3>
                    </div>
                    <div class="p-6 text-center">
                        <div class="text-4xl font-bold {{ $item->current_stock <= $item->min_stock ? 'text-red-500' : ($item->current_stock <= ($item->max_stock / 2) ? 'text-yellow-500' : 'text-green-500') }}">
                            {{ number_format($item->current_stock, 2) }}
                        </div>
                        <div class="mt-2 text-sm text-gray-500">{{ $item->unit ?? trans('inventory.unit') }}</div>
                        @if($item->min_stock)
                        <div class="mt-3 text-xs text-gray-400">
                            {{ trans('inventory.min_stock') }}: {{ number_format($item->min_stock, 2) }}
                            @if($item->max_stock) | {{ trans('inventory.max_stock') }}: {{ number_format($item->max_stock, 2) }} @endif
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endSection
