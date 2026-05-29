@props(['route', 'icon', 'label', 'active' => null])

@php
$isActive = $active
    ? request()->is($active)
    : request()->routeIs($route);
@endphp

<a href="{{ $route === '#' ? '#' : route($route) }}"
    class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-200 {{ $isActive ? 'bg-blue-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <x-hero-icon :name="$icon" class="w-5 h-5" />
    <span class="text-sm font-medium">{{ $label }}</span>
</a>
