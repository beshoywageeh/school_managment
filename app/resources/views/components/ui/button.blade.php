@props([
    'variant' => 'primary',
    'icon' => null,
    'type' => 'button',
    'disabled' => false,
])

@php
    $variantClasses = [
        'primary' => 'bg-primary text-white hover:bg-primary-dark focus:ring-primary/50',
        'secondary' => 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-50 focus:ring-gray-500/50',
        'danger' => 'bg-danger text-white hover:bg-danger/90 focus:ring-danger/50',
    ][$variant] ?? 'bg-primary text-white hover:bg-primary-dark focus:ring-primary/50';
@endphp

<button type="{{ $type }}"
    {{ $attributes->merge(['class' => "inline-flex items-center gap-2 px-4 py-2 text-sm font-medium rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 {$variantClasses}"]) }}
    {{ $disabled ? 'disabled' : '' }}
    @if ($disabled) aria-disabled="true" @endif
    aria-label="{{ $attributes->get('aria-label', $label ?? '') }}">
    @if ($icon)
        <x-hero-icon name="{{ $icon }}" class="w-4 h-4" />
    @endif
    {{ $slot }}
</button>
