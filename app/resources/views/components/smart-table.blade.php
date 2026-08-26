@props([
    'columns' => [],
    'filters' => null,
    'initialItems' => null,
    'apiUrl' => '',
    'perPage' => 10,
    'perPageOptions' => [10, 25, 50],
    'selectable' => false,
    'rowClickUrl' => '',
    'exportUrl' => '',
    'searchable' => false,
    'sortBy' => 'id',
    'sortOrder' => 'desc',
    'primaryKey' => 'id',
])

@php
    use Illuminate\Pagination\LengthAwarePaginator;
    $paginator =
        $initialItems instanceof LengthAwarePaginator ? $initialItems : new LengthAwarePaginator([], 0, $perPage);
@endphp

<div x-data="{
    columns: {{ json_encode($columns) }},
    items: {{ json_encode($paginator->items()) }},
    filters: {},
    sort: {
        by: '{{ $sortBy }}',
        order: '{{ $sortOrder }}'
    },
    loading: false,
    error: null,
    selectedItems: [],
    search: '',
    controller: null,
    primaryKey: '{{ $primaryKey }}',
    legacyFormatWarned: false,

    pagination: {
        current: {{ $paginator->currentPage() }},
        last: {{ $paginator->lastPage() }},
        total: {{ $paginator->total() }},
        from: {{ $paginator->firstItem() ?: 0 }},
        to: {{ $paginator->lastItem() ?: 0 }},
        perPage: {{ $perPage }}
    },

    init() {
        @if ($filters) @foreach ($filters as $filter)
                this.filters['{{ $filter['key'] }}'] = '';
            @endforeach
        @else
            this.columns.forEach(col => {
                if (col.filter_type) {
                    this.filters[col.filter_key] = '';
                }
            });
            if (this.columns.some(col => col.filter_type)) {
                console.warn('[smart-table] Deprecated: filters embedded in columns. Use the $filters prop instead.');
            } @endif
    },

    getNestedValue(obj, path) {
        return path.split('.').reduce((acc, part) => {
            if (acc === null || acc === undefined) return null;
            return acc[part];
        }, obj) ?? '-';
    },

    toggleSelectAll() {
        if (this.selectedItems.length === this.items.length) {
            this.selectedItems = [];
        } else {
            this.selectedItems = this.items.map(item => item[this.primaryKey]);
        }
    },

    toggleItem(id) {
        const idx = this.selectedItems.indexOf(id);
        if (idx === -1) {
            this.selectedItems.push(id);
        } else {
            this.selectedItems.splice(idx, 1);
        }
    },

    sortBy(key) {
        if (this.sort.by === key) {
            this.sort.order = this.sort.order === 'asc' ? 'desc' : 'asc';
        } else {
            this.sort.by = key;
            this.sort.order = 'asc';
        }
        this.fetchData(1);
    },

    handleRowClick(item) {
        @if($rowClickUrl)
        const url = '{{ $rowClickUrl }}'.replace('{id}', item[this.primaryKey]);
        window.location.href = url;
        @endif
    },

    exportData() {
        @if($exportUrl)
        let params = { ...this.filters };
        if (this.search) params.search = this.search;
        const query = new URLSearchParams(params).toString();
        window.open('{{ $exportUrl }}' + '?' + query, '_blank');
        @endif
    },

    fetchData(page = 1) {
        if (this.controller) {
            this.controller.abort();
        }
        this.controller = new AbortController();

        this.pagination.current = page;
        this.loading = true;
        this.error = null;

        let params = {
            page: page,
            sort_by: this.sort.by,
            sort_order: this.sort.order,
            per_page: this.pagination.perPage
        };

        Object.keys(this.filters).forEach(key => {
            params[key] = this.filters[key];
        });

        if (this.search) {
            params.search = this.search;
        }

        window.axios.get('{{ $apiUrl }}', { params: params, signal: this.controller.signal })
            .then(response => {
                if (response.data.hasOwnProperty('items')) {
                    this.items = response.data.items;
                    this.pagination.last = response.data.pagination.last_page;
                    this.pagination.total = response.data.pagination.total || (response.data.items.length * response.data.pagination.last_page);
                    const fromVal = response.data.pagination.from || ((response.data.pagination.current_page - 1) * this.pagination.perPage + 1);
                    this.pagination.from = fromVal;
                    this.pagination.to = response.data.pagination.to || (fromVal + response.data.items.length - 1);
                    if (!this.legacyFormatWarned) {
                        console.warn('[smart-table] Deprecated: legacy API format. Please migrate to standard Laravel paginated JSON. See specs/002-smart-table-enhancements/contracts/data-table-api.md');
                        this.legacyFormatWarned = true;
                    }
                } else {
                    this.items = response.data.data;
                    this.pagination.last = response.data.last_page;
                    this.pagination.total = response.data.total;
                    this.pagination.from = response.data.from;
                    this.pagination.to = response.data.to;
                }
                this.selectedItems = [];
            })
            .catch(error => {
                if (window.axios.isCancel(error)) return;
                this.error = '{{ trans('general.error_fetching') }}';
                console.error('Error fetching data:', error);
            })
            .finally(() => {
                this.loading = false;
            });
    }
}" class="space-y-4 font-sans text-right" dir="rtl">
    @if ($searchable || $exportUrl)
        <div class="flex justify-between items-center gap-4">
            @if ($searchable)
                <div class="flex-1 max-w-xs">
                    <input type="text" x-model="search" @input.debounce.300ms="fetchData(1)"
                        placeholder="{{ trans('general.search') }}" aria-label="{{ trans('general.search') }}"
                        class="w-full rounded-lg border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-primary focus:ring-primary/30 focus-visible:ring-2 focus-visible:ring-primary/30">
                </div>
            @endif
            @if ($exportUrl)
                <div>
                    <button @click="exportData()" aria-label="{{ trans('general.buttons.export') }}"
                        class="px-4 py-2 bg-primary text-white hover:bg-primary/90 rounded-full text-xs font-semibold transition-all duration-150 ease-in-out disabled:opacity-50 disabled:cursor-not-allowed focus-visible:ring-2 focus-visible:ring-primary/30">
                        {{ trans('general.buttons.export') }}
                    </button>
                </div>
            @endif
        </div>
    @endif

    @if ($filters)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
            @foreach ($filters as $filter)
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1">{{ $filter['label'] }}</label>
                    @if ($filter['type'] === 'text')
                        <input type="text" x-model="filters['{{ $filter['key'] }}']"
                            @input.debounce.300ms="fetchData(1)" placeholder="{{ trans('general.search') }}"
                            aria-label="{{ $filter['label'] }}"
                            class="w-full rounded-lg border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-primary focus:ring-primary/30 focus-visible:ring-2 focus-visible:ring-primary/30">
                    @elseif ($filter['type'] === 'select' && isset($filter['options']))
                        <select x-model="filters['{{ $filter['key'] }}']" @change.debounce.300ms="fetchData(1)"
                            aria-label="{{ $filter['label'] }}"
                            class="w-full rounded-lg border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-primary focus:ring-primary/30 focus-visible:ring-2 focus-visible:ring-primary/30">
                            <option value="">{{ trans('general.all_options') }}</option>
                            @foreach ($filter['options'] as $id => $label)
                                <option value="{{ $id }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        @php $hasLegacyFilters = collect($columns)->contains(fn($col) => isset($col['filter_type'])); @endphp
        @if ($hasLegacyFilters)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                @foreach ($columns as $col)
                    @if (isset($col['filter_type']))
                        <div>
                            <label class="block text-xs font-semibold text-gray-500 mb-1">{{ $col['label'] }}</label>
                            @if ($col['filter_type'] === 'text')
                                <input type="text" x-model="filters['{{ $col['filter_key'] }}']"
                                    @input.debounce.300ms="fetchData(1)" placeholder="{{ trans('general.search') }}"
                                    aria-label="{{ $col['label'] }}"
                                    class="w-full rounded-lg border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-primary focus:ring-primary/30 focus-visible:ring-2 focus-visible:ring-primary/30">
                            @endif
                            @if ($col['filter_type'] === 'select_relation' && isset($col['options']))
                                <select x-model="filters['{{ $col['filter_key'] }}']"
                                    @change.debounce.300ms="fetchData(1)" aria-label="{{ $col['label'] }}"
                                    class="w-full rounded-lg border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-primary focus:ring-primary/30 focus-visible:ring-2 focus-visible:ring-primary/30">
                                    <option value="">{{ trans('general.all_options') }}</option>
                                    @foreach ($col['options'] as $id => $label)
                                        <option value="{{ $id }}">{{ $label }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    @endif

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-right text-sm text-gray-500 border-collapse" role="table">
                <thead
                    class="bg-gray-50 text-xs text-gray-900 font-bold border-b border-gray-200 uppercase tracking-wider">
                    <tr>
                        @if ($selectable)
                            <th class="px-6 py-4 border-b border-gray-200 w-10">
                                <input type="checkbox" @change="toggleSelectAll()"
                                    :checked="selectedItems.length === items.length && items.length > 0"
                                    aria-label="{{ trans('general.select_all') }}"
                                    class="h-4 w-4 rounded border-gray-300 accent-primary focus:ring-2 focus:ring-primary/30 focus:ring-offset-0 cursor-pointer">
                            </th>
                        @endif
                        <template x-for="col in columns" :key="col.key">
                            <th class="px-6 py-4 border-b border-gray-200">
                                <template x-if="col.sortable">
                                    <button @click="sortBy(col.key)"
                                        :aria-label="'Sort by ' + col.label + (sort.by === col.key ? ' (' + sort.order + ')' : '')"
                                        class="flex items-center gap-1 font-bold focus:outline-none hover:text-primary hover:bg-primary/10 rounded-md transition-all duration-150 ease-in-out focus-visible:ring-2 focus-visible:ring-primary/30">
                                        <span x-text="col.label"></span>
                                        <svg x-show="sort.by === col.key && sort.order === 'asc'"
                                            class="w-3.5 h-3.5 text-primary" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path d="M5 15l7-7 7 7" />
                                        </svg>
                                        <svg x-show="sort.by === col.key && sort.order === 'desc'"
                                            class="w-3.5 h-3.5 text-primary" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2.5">
                                            <path d="M19 9l-7 7-7-7" />
                                        </svg>
                                        <svg x-show="sort.by !== col.key" class="w-3.5 h-3.5 text-gray-300"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path d="M8 7l4-4 4 4M8 17l4 4 4-4" />
                                        </svg>
                                    </button>
                                </template>
                                <template x-if="!col.sortable">
                                    <span x-text="col.label"></span>
                                </template>
                            </th>
                        </template>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <template x-if="loading">
                        <tr>
                            <td :colspan="columns.length + ({{ $selectable ? 1 : 0 }})" class="px-6 py-4">
                                <div class="space-y-3">
                                    <template x-for="i in 5" :key="i">
                                        <div class="flex gap-4 items-center">
                                            <div class="h-8 bg-gray-50 rounded animate-pulse flex-1"></div>
                                            <div class="h-8 bg-gray-50 rounded animate-pulse flex-1"></div>
                                            <div class="h-8 bg-gray-50 rounded animate-pulse w-24"></div>
                                        </div>
                                    </template>
                                </div>
                            </td>
                        </tr>
                    </template>
                    <template x-if="error">
                        <tr>
                            <td :colspan="columns.length + ({{ $selectable ? 1 : 0 }})"
                                class="text-center py-8 text-danger" x-text="error"></td>
                        </tr>
                    </template>
                    <template x-for="item in items" :key="item[primaryKey]">
                        <tr class="hover:bg-primary/5 transition-colors duration-150{{ $rowClickUrl ? ' cursor-pointer' : '' }}"
                            @if ($rowClickUrl) @click="handleRowClick(item)" @endif>
                            @if ($selectable)
                                <td class="px-6 py-4">
                                    <input type="checkbox" :checked="selectedItems.includes(item[primaryKey])"
                                        @change="toggleItem(item[primaryKey])"
                                        :aria-label="'Select row ' + item[primaryKey]" @click.stop
                                        class="h-4 w-4 rounded border-gray-300 accent-primary focus:ring-2 focus:ring-primary/30 focus:ring-offset-0 cursor-pointer">
                                </td>
                            @endif
                            <template x-for="col in columns" :key="col.key">
                                <td class="px-6 py-4 text-gray-900">
                                    <template x-if="col.key === 'actions'">
                                        <div class="flex items-center gap-2" @click.stop>
                                            {{ $actions ?? '' }}
                                        </div>
                                    </template>
                                    <template x-if="col.key !== 'actions'">
                                        <span x-text="getNestedValue(item, col.key)"></span>
                                    </template>
                                </td>
                            </template>
                        </tr>
                    </template>
                    <template x-if="!loading && items.length === 0">
                        <tr>
                            <td :colspan="columns.length + ({{ $selectable ? 1 : 0 }})"
                                class="text-center py-12 text-gray-500">
                                {{ trans('general.no_data') }}
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        @if ($selectable)
            <div x-show="selectedItems.length > 0"
                class="px-6 py-3 bg-primary/5 border-t border-primary/20 flex items-center gap-4" aria-live="polite">
                <span class="text-sm font-medium text-primary" x-text="selectedItems.length + ' selected'"></span>
                <div>
                    {{ $bulkActions ?? '' }}
                </div>
            </div>
        @endif

        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 flex justify-between items-center"
            x-show="pagination.last > 1">
            <div class="flex items-center gap-2">
                <span class="text-xs font-medium text-gray-500">
                    عرض <span x-text="pagination.from" class="font-bold"></span> – <span x-text="pagination.to"
                        class="font-bold"></span> من <span x-text="pagination.total" class="font-bold"></span>
                </span>
                @if (count($perPageOptions) > 0)
                    <select x-model.number="pagination.perPage" @change="pagination.current = 1; fetchData(1)"
                        aria-label="{{ trans('general.per_page') }}"
                        class="text-xs rounded-lg border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-primary focus:ring-primary/30 focus-visible:ring-2 focus-visible:ring-primary/30">
                        @foreach ($perPageOptions as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach
                    </select>
                @endif
            </div>

            <div class="flex items-center gap-2">
                <button @click="fetchData(pagination.current - 1)" :disabled="pagination.current === 1 || loading"
                    class="px-3 py-1.5 bg-white border border-gray-200 rounded-full text-xs font-semibold text-gray-900 hover:bg-gray-50 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-white transition-all duration-150 ease-in-out focus-visible:ring-2 focus-visible:ring-primary/30"
                    aria-label="{{ trans('general.previous') }}">
                    {{ trans('general.previous') }}
                </button>

                <span class="text-xs font-medium text-gray-500">
                    صفحة <span x-text="pagination.current"
                        class="text-primary font-bold"></span>{{ trans('general.of') }} <span
                        x-text="pagination.last" class="font-bold"></span>
                </span>

                <button @click="fetchData(pagination.current + 1)"
                    :disabled="pagination.current === pagination.last || loading"
                    class="px-3 py-1.5 bg-white border border-gray-200 rounded-full text-xs font-semibold text-gray-900 hover:bg-gray-50 shadow-sm disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-white transition-all duration-150 ease-in-out focus-visible:ring-2 focus-visible:ring-primary/30"
                    aria-label="{{ trans('general.next') }}">
                    {{ trans('general.next') }}
                </button>
            </div>
        </div>
    </div>
</div>
