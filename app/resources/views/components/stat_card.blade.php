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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('canvas[data-sparkline]').forEach(function (canvas) {
            var data = JSON.parse(canvas.dataset.sparkline);
            var color = canvas.dataset.color || '#16a34a';
            var ctx = canvas.getContext('2d');
            var w = canvas.width, h = canvas.height;
            var max = Math.max(...data, 1);
            var min = Math.min(...data);
            var range = max - min || 1;
            var padding = 2;
            ctx.clearRect(0, 0, w, h);
            ctx.beginPath();
            ctx.strokeStyle = color;
            ctx.lineWidth = 1.5;
            ctx.lineJoin = 'round';
            data.forEach(function (val, i) {
                var x = padding + (i / (data.length - 1)) * (w - padding * 2);
                var y = h - padding - ((val - min) / range) * (h - padding * 2);
                i === 0 ? ctx.moveTo(x, y) : ctx.lineTo(x, y);
            });
            ctx.stroke();
        });
    });
</script>
@endpush
