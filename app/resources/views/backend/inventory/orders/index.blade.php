@extends('layouts.app')
@section('title')
    {{ trans('stock.title') }} - @switch($type)
        @case('inventory') {{ trans('stock.income_order') }} @break
        @case('sales') {{ trans('stock.outcome_order') }} @break
        @case('purchases') {{ trans('stock.inventory_order') }} @break
        @default {{ trans('inventory.title') }}
    @endswitch
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <a href="{{ route('inventory.orders.index', ['type' => 'inventory'] + request()->except(['type', 'page'])) }}" class="px-3 py-1.5 text-sm rounded-lg transition-colors {{ $type === 'inventory' ? 'bg-primary/10 text-primary' : 'text-gray-600 hover:bg-gray-100' }}">{{ trans('stock.income_order') }}</a>
                <a href="{{ route('inventory.orders.index', ['type' => 'sales'] + request()->except(['type', 'page'])) }}" class="px-3 py-1.5 text-sm rounded-lg transition-colors {{ $type === 'sales' ? 'bg-primary/10 text-primary' : 'text-gray-600 hover:bg-gray-100' }}">{{ trans('stock.outcome_order') }}</a>
                <a href="{{ route('inventory.orders.index', ['type' => 'purchases'] + request()->except(['type', 'page'])) }}" class="px-3 py-1.5 text-sm rounded-lg transition-colors {{ $type === 'purchases' ? 'bg-primary/10 text-primary' : 'text-gray-600 hover:bg-gray-100' }}">{{ trans('stock.gard') }}</a>
            </div>
            <a href="{{ route('inventory.orders.create', $type) }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 flex items-center gap-2">
                <x-hero-icon name="plus" class="w-5 h-5" />
                {{ trans('general.new') }}
            </a>
        </div>

        <form method="GET" class="p-4 bg-gray-50 border-b border-gray-100 grid grid-cols-1 md:grid-cols-4 gap-4">
            <input type="hidden" name="type" value="{{ $type }}">
            <div>
                <x-input-label>{{ trans('general.search') }}</x-input-label>
                <input type="text" name="search" value="{{ request('search') }}" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none" placeholder="{{ trans('orders.num') }}">
            </div>
            <div>
                <x-select name="status" label="{{ trans('general.status') }}">
                    <option value="">{{ trans('general.all') }}</option>
                    <option value="paid" {{ request('status') === 'paid' ? 'selected' : '' }}>{{ trans('enums.inventory_order_status.paid') }}</option>
                    <option value="not_paid" {{ request('status') === 'not_paid' ? 'selected' : '' }}>{{ trans('enums.inventory_order_status.unpaid') }}</option>
                </x-select>
            </div>
            @if(in_array($type, ['sales', 'purchases']))
            <div>
                <x-select name="student_id" label="{{ trans('student.title') }}" class="tom-select">
                    <option value="">{{ trans('general.all') }}</option>
                    @foreach($students ?? [] as $student)
                        <option value="{{ $student->id }}" {{ request('student_id') == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                    @endforeach
                </x-select>
            </div>
            @else
            <div></div>
            @endif
            <div>
                <x-input-label>{{ trans('general.from') }}</x-input-label>
                <input type="date" name="from_date" value="{{ request('from_date') }}" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
            </div>
            <div>
                <x-input-label>{{ trans('general.to') }}</x-input-label>
                <input type="date" name="to_date" value="{{ request('to_date') }}" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
            </div>
            <div>
                <x-select name="per_page" label="{{ trans('general.showing') }}" onchange="this.form.submit()">
                    <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                </x-select>
            </div>
            <div class="flex items-end">
                <a href="{{ route('inventory.orders.index', $type) }}" class="px-4 py-2 text-sm text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-100">{{ trans('employees.reset_filters') }}</a>
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            <a href="{{ route('inventory.orders.index', ['type' => $type, 'sort_by' => 'auto_number', 'sort_order' => request('sort_by') === 'auto_number' && request('sort_order') === 'asc' ? 'desc' : 'asc'] + request()->except(['sort_by', 'sort_order', 'page'])) }}" class="flex items-center gap-1 hover:text-primary">
                                {{ trans('orders.num') }}
                                @if(request('sort_by') === 'auto_number') <span>{{ request('sort_order') === 'asc' ? '↑' : '↓' }}</span> @endif
                            </a>
                        </th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            <a href="{{ route('inventory.orders.index', ['type' => $type, 'sort_by' => 'date', 'sort_order' => request('sort_by') === 'date' && request('sort_order') === 'asc' ? 'desc' : 'asc'] + request()->except(['sort_by', 'sort_order', 'page'])) }}" class="flex items-center gap-1 hover:text-primary">
                                {{ trans('general.date') }}
                                @if(request('sort_by') === 'date') <span>{{ request('sort_order') === 'asc' ? '↑' : '↓' }}</span> @endif
                            </a>
                        </th>
                        @if($type === 'sales')
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('student.title') }}</th>
                        @endif
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            <a href="{{ route('inventory.orders.index', ['type' => $type, 'sort_by' => 'total_amount', 'sort_order' => request('sort_by') === 'total_amount' && request('sort_order') === 'asc' ? 'desc' : 'asc'] + request()->except(['sort_by', 'sort_order', 'page'])) }}" class="flex items-center gap-1 hover:text-primary">
                                {{ trans('stock.total_price') }}
                                @if(request('sort_by') === 'total_amount') <span>{{ request('sort_order') === 'asc' ? '↑' : '↓' }}</span> @endif
                            </a>
                        </th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.status') }}</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">
                            <a href="{{ route('inventory.orders.index', ['type' => $type, 'sort_by' => 'items_count', 'sort_order' => request('sort_by') === 'items_count' && request('sort_order') === 'asc' ? 'desc' : 'asc'] + request()->except(['sort_by', 'sort_order', 'page'])) }}" class="flex items-center gap-1 hover:text-primary">
                                {{ trans('orders.product_count') }}
                                @if(request('sort_by') === 'items_count') <span>{{ request('sort_order') === 'asc' ? '↑' : '↓' }}</span> @endif
                            </a>
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($orders ?? [] as $order)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $orders->firstItem() + $loop->index }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $order->auto_number }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $order->date?->format('Y-m-d') }}</td>
                        @if($type === 'sales')
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $order->student->name ?? '--' }}</td>
                        @endif
                        <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ number_format($order->total_amount, 2) }}</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $order->status?->color() ?? 'bg-gray-100 text-gray-700' }}">
                                {{ $order->status?->lang() ?? $order->status }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $order->items_count }}</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-1">
                                <a href="{{ route('inventory.orders.show', $order->id) }}" class="p-2 text-primary hover:bg-primary/10 rounded-lg" title="{{ trans('general.info') }}">
                                    <x-hero-icon name="information-circle" class="w-5 h-5" />
                                </a>
                                <a href="{{ route('inventory.orders.edit', $order->id) }}" class="p-2 text-primary hover:bg-primary/10 rounded-lg" title="{{ trans('general.edit') }}">
                                    <x-hero-icon name="pencil" class="w-5 h-5" />
                                </a>
                                <a href="{{ route('inventory.orders.pay', $order->id) }}" class="p-2 rounded-lg {{ $order->status?->value === 'paid' ? 'text-warning hover:bg-warning/10' : 'text-success hover:bg-success/10' }}" title="{{ trans('clothes.pay') }}">
                                    <x-hero-icon name="credit-card" class="w-5 h-5" />
                                </a>
                                <form action="{{ route('inventory.orders.destroy', $order->id) }}" method="POST" class="inline" onsubmit="confirmation(event)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-danger hover:bg-danger/10 rounded-lg" title="{{ trans('general.delete') }}">
                                        <x-hero-icon name="trash" class="w-5 h-5" />
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="{{ $type === 'sales' ? 8 : 7 }}" class="px-6 py-12 text-center">
                            <div class="bg-primary/5 text-primary px-4 py-3 rounded-lg inline-block">
                                {{ trans('general.Msg') }}
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if(($orders ?? collect())->hasPages())
        <div class="p-4 border-t border-gray-100 flex justify-between items-center">
            <div class="text-sm text-gray-500">
                {{ trans('general.showing') }} {{ $orders->firstItem() ?? 0 }} {{ trans('general.to') }} {{ $orders->lastItem() ?? 0 }} {{ trans('general.of') }} {{ $orders->total() }} {{ trans('general.results') }}
            </div>
            <div class="flex gap-1">
                {{ $orders->appends(request()->query())->links() }}
            </div>
        </div>
        @endif
    </div>
@endSection