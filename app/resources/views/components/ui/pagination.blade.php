@props([
    'livewire' => false,
    'name' => 'default',
])

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
