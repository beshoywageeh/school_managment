@props([
    'endpoint' => '',
    'columns' => [],
    'perPage' => 15,
    'name' => 'default',
    'livewire' => false,
])

<div x-data="dataTable()"
    x-init="
        loading = true;
        perPage = {{ $perPage }};
        @if ($livewire)
            $wire.fetchData();
        @else
            endpoint = '{{ $endpoint }}';
            init();
        @endif
    "
    @if ($livewire)
        x-on:table-data-{{ str_replace(['.', ' ', '/', '\\'], '-', $name) }}.window="
            let d = $event.detail;
            if (d.error) { error = d.error; loading = false; return; }
            rows = d.data ?? [];
            currentPage = d.current_page ?? 1;
            lastPage = d.last_page ?? 1;
            total = d.total ?? 0;
            from = d.from ?? 0;
            to = d.to ?? 0;
            perPage = d.per_page ?? perPage;
            sortField = d.sort_key ?? sortField;
            sortDirection = d.sort_dir ?? sortDirection;
            loading = false;
            error = null;
        "
        x-on:livewire-table-{{ str_replace(['.', ' ', '/', '\\'], '-', $name) }}-filter.window="
            loading = true;
            $wire.applyFilters($event.detail.filters);
        "
    @endif
    {{ $attributes->merge(['class' => 'w-full']) }}>

    {{-- Filters Slot --}}
    @if (isset($filters))
        <div class="mb-4">
            {{ $filters }}
        </div>
    @endif

    {{-- Loading State --}}
    <div x-show="loading" class="flex items-center justify-center py-12">
        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-primary"></div>
    </div>

    {{-- Error State --}}
    <div x-show="error && !loading" x-cloak
        class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4">
        <p x-text="error"></p>
    </div>

    {{-- Empty State --}}
    <div x-show="!loading && !error && rows.length === 0" x-cloak
        class="text-center py-12 text-gray-500">
        <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
        </svg>
        <p class="text-lg font-medium">لا توجد بيانات</p>
    </div>

    {{-- Table --}}
    <div x-show="!loading && !error && rows.length > 0" x-cloak
        class="overflow-x-auto bg-white rounded-xl border border-gray-200">
        <table class="w-full text-sm" role="grid" aria-label="data table">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    @foreach ($columns as $column)
                        <th scope="col"
                            class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider {{ ($column['sortable'] ?? false) ? 'cursor-pointer hover:bg-gray-100 select-none' : '' }}"
                            @if ($column['sortable'] ?? false)
                                @if ($livewire)
                                    x-on:click="loading = true; $wire.sortBy('{{ $column['key'] }}')"
                                    @keydown.enter="loading = true; $wire.sortBy('{{ $column['key'] }}')"
                                @else
                                    x-on:click="sort('{{ $column['key'] }}')"
                                    @keydown.enter="sort('{{ $column['key'] }}')"
                                @endif
                                :class="{ 'text-primary': sortField === '{{ $column['key'] }}' }"
                                role="columnheader"
                                :aria-sort="sortField === '{{ $column['key'] }}' ? (sortDirection === 'asc' ? 'ascending' : 'descending') : 'none'"
                                tabindex="0"
                            @endif>
                            <span class="inline-flex items-center gap-1">
                                {{ $column['label'] }}
                                @if ($column['sortable'] ?? false)
                                    <template x-if="sortField === '{{ $column['key'] }}'">
                                        <span x-text="sortDirection === 'asc' ? '↑' : '↓'" class="text-xs"></span>
                                    </template>
                                @endif
                            </span>
                        </th>
                    @endforeach
                    @if (isset($actions))
                        <th scope="col" class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            الإجراءات
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <template x-for="(row, index) in rows" :key="row.id">
                    <tr x-data
                        tabindex="0"
                        class="hover:bg-gray-50 transition-colors focus:outline-none focus:bg-primary/5"
                        :aria-rowindex="index + 1 + (currentPage - 1) * perPage"
                        role="row">
                        @foreach ($columns as $column)
                            <td class="px-4 py-3 text-gray-700 whitespace-nowrap">
                                @if (isset($column['type']) && $column['type'] === 'status')
                                    <x-ui.status-badge
                                        :status="'active'"
                                        :label="''"
                                        x-text="row.{{ $column['key'] }}" />
                                @else
                                    <span x-text="row.{{ $column['key'] }}"></span>
                                @endif
                            </td>
                        @endforeach
                        @if (isset($actions))
                            <td class="px-4 py-3">
                                {{ $actions }}
                            </td>
                        @endif
                    </tr>
                </template>
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div x-show="!loading && !error && rows.length > 0" x-cloak
        class="flex items-center justify-between px-4 py-3 bg-white border border-t-0 border-gray-200 rounded-b-xl">
        <div class="text-sm text-gray-600">
            <span x-text="'من ' + from + ' إلى ' + to + ' (إجمالي ' + total + ')'"></span>
        </div>
        <div class="flex items-center gap-2">
            <button type="button"
                @if ($livewire)
                    x-on:click="loading = true; $wire.goToPage(currentPage - 1)"
                @else
                    x-on:click="goToPage(currentPage - 1)"
                @endif
                :disabled="currentPage === 1"
                class="px-3 py-1.5 text-sm rounded-lg border border-gray-300 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                السابق
            </button>
            <span class="text-sm text-gray-600" x-text="'صفحة ' + currentPage + ' من ' + lastPage"></span>
            <button type="button"
                @if ($livewire)
                    x-on:click="loading = true; $wire.goToPage(currentPage + 1)"
                @else
                    x-on:click="goToPage(currentPage + 1)"
                @endif
                :disabled="currentPage === lastPage"
                class="px-3 py-1.5 text-sm rounded-lg border border-gray-300 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                التالي
            </button>
        </div>
    </div>

    {{-- Per Page Select --}}
    <div x-show="!loading && !error && rows.length > 0" x-cloak
        class="flex items-center gap-2 mt-2">
        <label class="text-sm text-gray-600">عرض</label>
        <select
                @if ($livewire)
                    x-on:change="loading = true; $wire.set('perPage', parseInt($el.value))"
                @else
                    x-model="perPage" x-on:change="currentPage = 1; fetchPage()"
                @endif
            class="text-sm border border-gray-300 rounded-lg px-2 py-1">
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <label class="text-sm text-gray-600">صفوف</label>
    </div>
</div>
