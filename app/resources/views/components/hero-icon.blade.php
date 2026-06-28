@props([
    'name' => 'heroicons',
    'type' => $type ?? 'outline',
    'class' => $class ?? 'w-6 h-6 text-gray-500',
])

@php
    $icons = \App\View\Components\HeroIcon::paths();
    $path = $icons[$type][$name] ?? ($icons['outline'][$name] ?? '');
@endphp

<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
    class="{{ $class }}">
    {!! $path !!}
</svg>
