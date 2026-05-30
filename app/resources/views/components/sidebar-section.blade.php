@props(['title', 'icon', 'active' => ''])

@php $isOpen = $active ? request()->is($active) : false; @endphp

<div x-data="{ open: {{ $isOpen ? 'true' : 'false' }} }">
    <button @click="open = !open" type="button"
        class="flex items-center gap-3 w-full px-4 py-3 text-gray-300 hover:bg-gray-800 hover:text-white rounded-lg transition-all duration-200">
        <x-hero-icon :name="$icon" class="w-5 h-5" />
        <span class="text-sm font-medium flex-1 text-start">{{ $title }}</span>
        <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none"
            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div x-show="open" class="mt-1 mx-2 space-y-1 bg-gray-800 rounded-lg overflow-hidden" style="display: none;">
        {{ $slot }}
    </div>
</div>
