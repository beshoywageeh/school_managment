@props(['color' => 'blue'])

@php
    $colorMap = [
        'blue' => 'border-s-blue-500',
        'green' => 'border-s-green-500',
        'amber' => 'border-s-amber-500',
        'red' => 'border-s-red-500',
        'purple' => 'border-s-purple-500',
        'cyan' => 'border-s-cyan-500',
    ];
    $borderColor = $colorMap[$color] ?? 'border-s-blue-500';
@endphp

<div
    {{ $attributes->merge(['class' => "bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center gap-4 border-s-4 {$borderColor} max-w-sm w-full"]) }}>
    {{ $slot }}
</div>
