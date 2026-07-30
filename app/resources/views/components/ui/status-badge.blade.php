@props([
    'status' => 'active',
    'label' => '',
])

@php
    $dotColors = [
        'active' => 'bg-status-active',
        'inactive' => 'bg-gray-400',
        'excluded' => 'bg-status-excluded',
        'primary' => 'bg-status-primary',
    ][$status] ?? 'bg-gray-400';

    $bgColors = [
        'active' => 'bg-status-active/10 text-status-active',
        'inactive' => 'bg-gray-50 text-gray-600',
        'excluded' => 'bg-status-excluded/10 text-status-excluded',
        'primary' => 'bg-status-primary/10 text-status-primary',
    ][$status] ?? 'bg-gray-50 text-gray-600';
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium {$bgColors}"]) }}
    role="status"
    aria-label="{{ $label }}">
    <span class="w-2 h-2 rounded-full {{ $dotColors }}" aria-hidden="true"></span>
    {{ $label }}
</span>
