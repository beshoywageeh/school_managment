@props([
    'fields' => [],
    'tableName' => 'default',
])

<div x-data="{ filtersOpen: false, filterValues: {} }" {{ $attributes->merge(['class' => 'bg-white rounded-xl border border-gray-200 mb-4']) }}>
    <button type="button"
        @click="filtersOpen = !filtersOpen"
        class="flex items-center gap-2 px-4 py-3 text-sm font-medium text-gray-700 hover:text-gray-900 w-full text-right">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
        </svg>
        <span x-text="filtersOpen ? 'إخفاء الفلتر' : 'عرض الفلتر'"></span>
    </button>
    <div x-show="filtersOpen" x-cloak x-collapse class="px-4 pb-4 border-t border-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-4" x-ref="filterFields">
            {{ $slot }}
        </div>
        <div class="flex items-center gap-2 pt-4 border-t border-gray-100 mt-4">
            <x-ui.button variant="primary"
                x-on:click="
                    const fields = $refs.filterFields.querySelectorAll('[name]');
                    const vals = {};
                    fields.forEach(f => { if (f.value) vals[f.name] = f.value; });
                    $dispatch('livewire-table-{{ $tableName }}-filter', { filters: vals });
                ">
                {{ trans('general.search') ?? 'بحث' }}
            </x-ui.button>
            <x-ui.button variant="secondary"
                x-on:click="
                    filterValues = {};
                    $refs.filterFields.querySelectorAll('[name]').forEach(f => f.value = '');
                    $dispatch('livewire-table-{{ $tableName }}-filter', { filters: {} });
                ">
                {{ trans('general.reset') ?? 'إعادة تعيين' }}
            </x-ui.button>
        </div>
    </div>
</div>
