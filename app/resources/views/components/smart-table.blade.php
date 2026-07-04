@props([
    'columns' => [],
    'initialItems' => null,
    'apiUrl' => '',
])

@php
    use Illuminate\Pagination\LengthAwarePaginator;
    $paginator = $initialItems instanceof LengthAwarePaginator
        ? $initialItems
        : new LengthAwarePaginator([], 0, 10);
@endphp

<div x-data="{
    columns: {{ json_encode($columns) }},
    items: {{ json_encode($paginator->items()) }},

    // كائن الفلاتر يربط الـ filter_key مباشرة
    filters: {},

    // كائن الترتيب
    sort: {
        by: 'id',
        order: 'desc'
    },

    loading: false,
    error: null,

    pagination: {
        current: {{ $paginator->currentPage() }},
        last: {{ $paginator->lastPage() }}
    },

    init() {
        // بناء الفلاتر بناءً على الـ filter_key فقط لو الـ filter_type موجود
        this.columns.forEach(col => {
            if (col.filter_type) {
                this.filters[col.filter_key] = '';
            }
        });
    },

    getNestedValue(obj, path) {
        return path.split('.').reduce((acc, part) => {
            if (acc === null || acc === undefined) return null;
            return acc[part];
        }, obj) ?? '-';
    },

    // دالة الترتيب عند الضغط على الهيدر
    sortBy(key) {
        if (this.sort.by === key) {
            this.sort.order = this.sort.order === 'asc' ? 'desc' : 'asc';
        } else {
            this.sort.by = key;
            this.sort.order = 'asc';
        }
        this.fetchData(1);
    },

    fetchData(page = 1) {
        this.pagination.current = page;
        this.loading = true;
        this.error = null;

        let params = {
            page: page,
            sort_by: this.sort.by,
            sort_order: this.sort.order
        };

        Object.keys(this.filters).forEach(key => {
            params[key] = this.filters[key];
        });

        axios.get('{{ $apiUrl }}', { params: params })
            .then(response => {
                this.items = response.data.items;
                this.pagination.last = response.data.pagination.last_page;
            })
            .catch(error => {
                this.error = '{{ trans("general.error_fetching") }}';
                console.error('Error fetching data:', error);
            })
            .finally(() => {
                this.loading = false;
            });
    }
}" class="space-y-4 font-sans text-right" dir="rtl">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
        @foreach ($columns as $col)
            @if (isset($col['filter_type']))
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">{{ $col['label'] }}</label>

                    @if ($col['filter_type'] === 'text')
                        <input type="text" x-model="filters['{{ $col['filter_key'] }}']"
                            @input.debounce.300ms="fetchData(1)" placeholder="{{ trans('general.search') }}"
                            class="w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500">
                    @endif

                    @if ($col['filter_type'] === 'select_relation' && isset($col['options']))
                        <select x-model="filters['{{ $col['filter_key'] }}']" @change.debounce.300ms="fetchData(1)"
                            class="w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500">
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

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-right text-sm text-gray-500 border-collapse">
                <thead
                    class="bg-gray-100 text-xs text-gray-700 font-bold border-b border-gray-200 uppercase tracking-wider">
                    <tr>
                        <template x-for="col in columns" :key="col.key">
                            <th class="px-6 py-4 border-b border-gray-200">
                                <template x-if="col.sortable">
                                    <button @click="sortBy(col.key)"
                                        class="flex items-center gap-1 font-bold focus:outline-none hover:text-indigo-600 transition">
                                        <span x-text="col.label"></span>
                                        <span x-show="sort.by === col.key && sort.order === 'asc'">↑</span>
                                        <span x-show="sort.by === col.key && sort.order === 'desc'">↓</span>
                                        <span x-show="sort.by !== col.key" class="text-gray-300">⇅</span>
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
                            <td :colspan="columns.length" class="px-6 py-4">
                                <div class="space-y-3">
                                    <template x-for="i in 5" :key="i">
                                        <div class="flex gap-4 items-center">
                                            <div class="h-8 bg-gray-200 rounded animate-pulse flex-1"></div>
                                            <div class="h-8 bg-gray-200 rounded animate-pulse flex-1"></div>
                                            <div class="h-8 bg-gray-200 rounded animate-pulse w-24"></div>
                                        </div>
                                    </template>
                                </div>
                            </td>
                        </tr>
                    </template>
                    <template x-if="error">
                        <tr>
                            <td :colspan="columns.length" class="text-center py-8 text-red-500" x-text="error"></td>
                        </tr>
                    </template>
                    <template x-for="item in items" :key="item.id">
                        <tr class="hover:bg-gray-50/80 transition duration-150">
                            <template x-for="col in columns" :key="col.key">
                                <td class="px-6 py-4 text-gray-900">

                                    <template x-if="col.key === 'actions'">
                                        <td class="px-6 py-4 text-gray-900">
                                            <div class="flex items-center gap-2">
                                                {{ $actions ?? '' }}
                                            </div>
                                        </td>
                                    </template>

                                    <template x-if="col.key !== 'actions'">
                                        <span x-text="getNestedValue(item, col.key) || '-'"></span>
                                    </template>

                                </td>
                            </template>
                        </tr>
                    </template>
                    <template x-if="!loading && items.length === 0">
                        <tr>
                            <td :colspan="columns.length" class="text-center py-12 text-gray-400">
                                {{ trans('general.no_data') }}
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 flex justify-between items-center"
            x-show="pagination.last > 1">
            <button @click="fetchData(pagination.current - 1)" :disabled="pagination.current === 1 || loading"
                class="px-3 py-1.5 bg-white border border-gray-300 rounded-lg text-xs font-semibold text-gray-700 hover:bg-gray-50 shadow-sm disabled:opacity-40 disabled:hover:bg-white transition">
                {{ trans('general.previous') }}
            </button>

            <span class="text-xs font-medium text-gray-600">
                صفحة <span x-text="pagination.current"
                    class="text-indigo-600 font-bold"></span>{{ trans('general.of') }} <span x-text="pagination.last"
                    class="font-bold"></span>
            </span>

            <button @click="fetchData(pagination.current + 1)" :disabled="pagination.current === pagination.last || loading"
                class="px-3 py-1.5 bg-white border border-gray-300 rounded-lg text-xs font-semibold text-gray-700 hover:bg-gray-50 shadow-sm disabled:opacity-40 disabled:hover:bg-white transition">
                {{ trans('general.next') }}
            </button>
        </div>
    </div>
</div>
