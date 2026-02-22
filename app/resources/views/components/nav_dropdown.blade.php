@props(['title', 'icon'])

<div x-data="{ open: false }">
    <button @click="open = !open" class="w-full flex items-center px-4 py-2 text-gray-300 transition-colors duration-200 transform rounded-md hover:bg-gray-700">
        @if($icon)
            <i class="{{ $icon }} fa-fw w-6 text-center text-lg"></i>
        @endif
        <span class="mx-4 font-medium flex-1 text-left rtl:text-right">{{ $title }}</span>
        <i class="fas fa-chevron-down transition-transform duration-200" :class="{ 'rotate-180': open }"></i>
    </button>
    <ul x-show="open" x-transition class="pl-8 mt-1 space-y-1 bg-gray-700 rounded-md">
        {{ $slot }}
    </ul>
</div>
