@props([
    'status' => 'active',
    'label' => '',
])

@php
    $dotColors = [
        'active' => 'bg-green-500',
        'inactive' => 'bg-gray-400',
        'excluded' => 'bg-red-500',
        'primary' => 'bg-blue-500',
    ][$status] ?? 'bg-gray-400';

    $bgColors = [
        'active' => 'bg-green-50 text-green-700',
        'inactive' => 'bg-gray-50 text-gray-600',
        'excluded' => 'bg-red-50 text-red-700',
        'primary' => 'bg-blue-50 text-blue-700',
    ][$status] ?? 'bg-gray-50 text-gray-600';
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium {$bgColors}"]) }}
    role="status"
    aria-label="{{ $label }}">
    <span class="w-2 h-2 rounded-full {{ $dotColors }}" aria-hidden="true"></span>
    {{ $label }}
</span>
