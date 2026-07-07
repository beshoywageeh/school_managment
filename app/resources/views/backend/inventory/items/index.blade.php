@extends('layouts.app')
@section('title')
    {{ trans('inventory.title') }}
@endsection

@php
    $currentType = request('type', 'all');
@endphp

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-2">
                <a href="{{ route('inventory.items.index', ['type' => 'all'] + request()->except('type')) }}" class="px-3 py-1.5 text-sm rounded-lg transition-colors {{ $currentType === 'all' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-100' }}">{{ trans('inventory.all') }}</a>
                <a href="{{ route('inventory.items.index', ['type' => 'stock'] + request()->except('type')) }}" class="px-3 py-1.5 text-sm rounded-lg transition-colors {{ $currentType === 'stock' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-100' }}">{{ trans('inventory.stock') }}</a>
                <a href="{{ route('inventory.items.index', ['type' => 'clothe'] + request()->except('type')) }}" class="px-3 py-1.5 text-sm rounded-lg transition-colors {{ $currentType === 'clothe' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-100' }}">{{ trans('inventory.clothes') }}</a>
                <a href="{{ route('inventory.items.index', ['type' => 'book'] + request()->except('type')) }}" class="px-3 py-1.5 text-sm rounded-lg transition-colors {{ $currentType === 'book' ? 'bg-blue-100 text-blue-700' : 'text-gray-600 hover:bg-gray-100' }}">{{ trans('inventory.books') }}</a>
            </div>
            <div x-data="{ open: false, formType: 'stock' }">
                <button x-on:click="open = true" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 flex items-center gap-2">
                    <x-hero-icon name="plus" class="w-5 h-5" />
                    {{ trans('inventory.add_item') }}
                </button>
                <div x-show="open" x-transition class="fixed inset-0 z-50 flex items-start justify-center bg-black/50 p-4 pt-8" x-on:click.self="open = false" style="display: none;">
                    <div x-show="open" x-transition class="bg-white rounded-xl shadow-xl w-full max-w-2xl overflow-hidden" style="display: none;">
                        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                            <h3 class="text-lg font-bold text-gray-800">{{ trans('inventory.add_item') }}</h3>
                            <button type="button" x-on:click="open = false" class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                            </button>
                        </div>
                        <form action="{{ route('inventory.items.store') }}" method="POST">
                            @csrf
                            <div class="p-6">
                                @include('backend.inventory.items._form')
                            </div>
                            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                                <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium">{{ trans('general.Submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <form method="GET" class="p-4 bg-gray-50 border-b border-gray-100 grid grid-cols-1 md:grid-cols-4 gap-4">
            <input type="hidden" name="type" value="{{ $currentType }}">
            <div>
                <x-input-label>{{ trans('general.search') }}</x-input-label>
                <input type="text" name="search" value="{{ request('search') }}" class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none" placeholder="{{ trans('inventory.name') }}">
            </div>
            <div>
                <x-select name="category" label="{{ trans('book_sheet.category') }}">
                    <option value="">{{ trans('general.all') }}</option>
                    <option value="book" {{ request('category') === 'book' ? 'selected' : '' }}>{{ trans('inventory.books') }}</option>
                    <option value="sheet" {{ request('category') === 'sheet' ? 'selected' : '' }}>Sheet</option>
                </x-select>
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
                <a href="{{ route('inventory.items.index', ['type' => $currentType]) }}" class="px-4 py-2 text-sm text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-100">{{ trans('employees.reset_filters') }}</a>
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            <a href="{{ route('inventory.items.index', ['type' => $currentType, 'sort_by' => 'name', 'sort_order' => request('sort_by') === 'name' && request('sort_order') === 'asc' ? 'desc' : 'asc'] + request()->except(['sort_by', 'sort_order', 'page'])) }}" class="flex items-center gap-1 hover:text-blue-600">
                                {{ trans('inventory.name') }}
                                @if(request('sort_by') === 'name') <span>{{ request('sort_order') === 'asc' ? '↑' : '↓' }}</span> @endif
                            </a>
                        </th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            <a href="{{ route('inventory.items.index', ['type' => $currentType, 'sort_by' => 'type', 'sort_order' => request('sort_by') === 'type' && request('sort_order') === 'asc' ? 'desc' : 'asc'] + request()->except(['sort_by', 'sort_order', 'page'])) }}" class="flex items-center gap-1 hover:text-blue-600">
                                {{ trans('inventory.type') }}
                                @if(request('sort_by') === 'type') <span>{{ request('sort_order') === 'asc' ? '↑' : '↓' }}</span> @endif
                            </a>
                        </th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('book_sheet.category') }}</th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            <a href="{{ route('inventory.items.index', ['type' => $currentType, 'sort_by' => 'current_stock', 'sort_order' => request('sort_by') === 'current_stock' && request('sort_order') === 'asc' ? 'desc' : 'asc'] + request()->except(['sort_by', 'sort_order', 'page'])) }}" class="flex items-center gap-1 hover:text-blue-600">
                                {{ trans('inventory.current_stock') }}
                                @if(request('sort_by') === 'current_stock') <span>{{ request('sort_order') === 'asc' ? '↑' : '↓' }}</span> @endif
                            </a>
                        </th>
                        <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                            <a href="{{ route('inventory.items.index', ['type' => $currentType, 'sort_by' => 'sell_price', 'sort_order' => request('sort_by') === 'sell_price' && request('sort_order') === 'asc' ? 'desc' : 'asc'] + request()->except(['sort_by', 'sort_order', 'page'])) }}" class="flex items-center gap-1 hover:text-blue-600">
                                {{ trans('inventory.sell_price') }}
                                @if(request('sort_by') === 'sell_price') <span>{{ request('sort_order') === 'asc' ? '↑' : '↓' }}</span> @endif
                            </a>
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($items ?? [] as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $items->firstItem() + $loop->index }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $item->name }}</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $item->type?->color() ?? 'bg-gray-100 text-gray-700' }}">
                                {{ $item->type?->lang() ?? $item->type }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            @if($item->category)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $item->category->color() ?? 'bg-gray-100 text-gray-700' }}">
                                    {{ $item->category->lang() ?? $item->category }}
                                </span>
                            @else
                                <span class="text-gray-400">--</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $item->current_stock }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $item->sell_price }}</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center justify-center gap-1" x-data="{ editOpen: false, editType: '{{ $item->type?->value ?? 'stock' }}' }">
                                <a href="{{ route('inventory.items.show', $item->id) }}" class="p-2 text-primary hover:bg-primary/10 rounded-lg" title="{{ trans('general.info') }}">
                                    <x-hero-icon name="information-circle" class="w-5 h-5" />
                                </a>
                                <button x-on:click="editOpen = true" class="p-2 text-primary hover:bg-primary/10 rounded-lg" title="{{ trans('general.edit') }}">
                                    <x-hero-icon name="pencil" class="w-5 h-5" />
                                </button>
                                <form action="{{ route('inventory.items.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-danger hover:bg-danger/10 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                        <x-hero-icon name="trash" class="w-5 h-5" />
                                    </button>
                                </form>
                                <div x-show="editOpen" x-transition class="fixed inset-0 z-50 flex items-start justify-center bg-black/50 p-4 pt-8" x-on:click.self="editOpen = false" style="display: none;">
                                    <div x-show="editOpen" x-transition class="bg-white rounded-xl shadow-xl w-full max-w-2xl overflow-hidden" style="display: none;">
                                        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                                            <h3 class="text-lg font-bold text-gray-800">{{ trans('inventory.edit_item') }}</h3>
                                            <button type="button" x-on:click="editOpen = false" class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                            </button>
                                        </div>
                                        <form action="{{ route('inventory.items.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="p-6">
                                                @include('backend.inventory.items._form')
                                            </div>
                                            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                                                <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium">{{ trans('general.Submit') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center">
                            <div class="bg-blue-50 text-blue-600 px-4 py-3 rounded-lg inline-block">
                                {{ trans('general.Msg') }}
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if(($items ?? collect())->hasPages())
        <div class="p-4 border-t border-gray-100 flex justify-between items-center">
            <div class="text-sm text-gray-500">
                {{ trans('general.showing') }} {{ $items->firstItem() ?? 0 }} {{ trans('general.to') }} {{ $items->lastItem() ?? 0 }} {{ trans('general.of') }} {{ $items->total() }} {{ trans('general.results') }}
            </div>
            <div class="flex gap-1">
                {{ $items->appends(request()->query())->links() }}
            </div>
        </div>
        @endif
    </div>
@endSection