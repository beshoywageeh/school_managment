@props([
    'color' => 'blue',
    'trend' => null,
    'trendDirection' => 'up',
    'sparklineData' => null,
    'sparklineColor' => '#16a34a',
])

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
    {{ $attributes->merge(['class' => "bg-white rounded-xl border border-gray-100 shadow-sm p-6 flex items-center gap-4 border-s-4 {$borderColor} w-full"]) }}>
    {{ $slot }}
    @if ($trend)
        <div class="flex flex-col items-end mr-auto">
            <span class="text-xs {{ $trendDirection === 'up' ? 'text-green-600' : 'text-red-600' }} font-medium">
                @if ($trendDirection === 'up')▲ @else ▼ @endif
                {{ $trend }}
            </span>
        </div>
    @endif
    @if ($sparklineData)
        <canvas class="w-16 h-8 ml-auto" data-sparkline="{{ json_encode($sparklineData) }}" data-color="{{ $sparklineColor }}"></canvas>
    @endif
</div>
