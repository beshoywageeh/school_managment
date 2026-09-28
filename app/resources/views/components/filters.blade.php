@props([
    'action' => url()->current(),
    'reset' => url()->current(),
    'placeholder' => trans('general.search'),
    'label' => trans('general.search'),
    'searchName' => 'search',
])
<div class="p-4 bg-gray-50 border-b border-gray-100">
    <form method="GET" action="{{ $action }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <x-input-label>{{ $label }}</x-input-label>
            <input type="text" name="{{ $searchName }}" value="{{ request($searchName) }}"
                class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
                placeholder="{{ $placeholder }}">
        </div>
        {{ $slot }}
        <div class="flex items-end gap-2">
            <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 text-sm">
                {{ trans('general.search') }}
            </button>
            <a href="{{ $reset }}" class="px-4 py-2 text-sm text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-100">
                {{ trans('general.reset') }}
            </a>
        </div>
    </form>
</div>
