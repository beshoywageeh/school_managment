@props([
    'icon' => null,
    'label' => '',
    'href' => '',
    'active' => false,
])

@php
    $activeClasses = $active
        ? 'ring-2 ring-green-500 border-green-500 bg-green-50'
        : 'border-gray-200 hover:border-gray-300 hover:shadow-md';
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => "block p-6 bg-white rounded-xl border transition-all duration-200 {$activeClasses}"]) }}
    role="link"
    aria-label="{{ $label }}"
    @if ($active) aria-current="page" @endif>
    @if ($icon)
        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4">
            <x-hero-icon name="{{ $icon }}" class="w-6 h-6 text-primary" />
        </div>
    @endif
    <h3 class="text-base font-semibold text-gray-900">{{ $label }}</h3>
</a>
