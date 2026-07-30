@props([
    'color' => 'blue',
    'trend' => null,
    'trendDirection' => 'up',
    'sparklineData' => null,
    'sparklineColor' => '#3b82f6',
])

@php
    use Illuminate\Support\Js;

    $colorMap = [
        'blue' => 'bg-primary/10',
        'green' => 'bg-success/10',
        'amber' => 'bg-warning/10',
        'red' => 'bg-danger/10',
        'purple' => 'bg-purple-100',
        'cyan' => 'bg-cyan-100',
    ];
    $tint = $colorMap[$color] ?? 'bg-primary/10';

    $svgWidth = 60;
    $svgHeight = 30;
    $svgPadding = 2;
    $sparklinePoints = '';
    if ($sparklineData && count($sparklineData) > 0) {
        $count = count($sparklineData);
        $max = max($sparklineData) ?: 1;
        $min = min($sparklineData);
        $range = $max - $min ?: 1;
        $points = [];
        foreach ($sparklineData as $i => $val) {
            $x = $svgPadding + ($i / max($count - 1, 1)) * ($svgWidth - $svgPadding * 2);
            $y = $svgHeight - $svgPadding - (($val - $min) / $range) * ($svgHeight - $svgPadding * 2);
            $points[] = round($x, 1) . ',' . round($y, 1);
        }
        $sparklinePoints = implode(' ', $points);
    }
@endphp

<div
    {{ $attributes->merge(['class' => "bg-white rounded-xl border border-gray-100 shadow-sm p-6 flex items-center gap-4 w-full"]) }}>
    {{ $slot }}
    @if ($trend)
        <div class="flex flex-col items-end mr-auto">
            <span class="text-xs {{ $trendDirection === 'up' ? 'text-success' : 'text-danger' }} font-medium">
                @if ($trendDirection === 'up')
                    ▲
                @else
                    ▼
                @endif
                {{ $trend }}
            </span>
        </div>
    @endif
    @if ($sparklinePoints)
        <svg class="w-16 h-8 ml-auto shrink-0" viewBox="0 0 {{ $svgWidth }} {{ $svgHeight }}"
            preserveAspectRatio="none">
            <polyline fill="none" stroke="{{ $sparklineColor }}" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" points="{{ $sparklinePoints }}" />
        </svg>
    @endif
</div>
