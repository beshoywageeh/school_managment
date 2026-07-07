@props([
    'type' => 'area',
    'chartData' => [],
    'loading' => false,
])

<div
    wire:key="chart-widget-{{ $type }}"
    role="region"
    aria-label="{{ __('general.chart') }}"
    {{ $attributes->merge(['class' => 'bg-white rounded-xl border border-gray-200 p-6']) }}
>
    @if ($loading)
        <div class="animate-pulse space-y-4">
            <div class="h-4 bg-gray-200 rounded w-1/4"></div>
            <div class="h-64 bg-gray-200 rounded"></div>
        </div>
    @elseif (empty($chartData))
        <div class="flex flex-col items-center justify-center h-64 text-gray-400">
            <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            <p class="text-sm">{{ __('general.no_data') }}</p>
        </div>
    @else
        <div
            x-data="{
                chart: null,
                type: '{{ $type }}',
                initChart() {
                    const el = this.$refs.chartContainer;
                    if (!el || typeof ApexCharts === 'undefined') return;

                    const isRtl = document.documentElement.dir === 'rtl';
                    const config = {
                        chart: {
                            type: this.type,
                            height: 280,
                            toolbar: { show: false },
                            fontFamily: 'inherit',
                            foreColor: '#64748b',
                            dir: isRtl ? 'rtl' : 'ltr',
                        },
                        dataLabels: { enabled: false },
                        stroke: { curve: 'smooth', width: 2 },
                        fill: { opacity: 0.15, type: 'gradient' },
                        grid: { borderColor: '#f1f5f9', strokeDashArray: 4 },
                        xaxis: { labels: { style: { colors: '#94a3b8', fontSize: '12px' } } },
                        yaxis: { labels: { style: { colors: '#94a3b8', fontSize: '12px' } } },
                        tooltip: { enabled: true },
                        ...@json($chartData),
                    };

                    this.chart = new ApexCharts(el, config);
                    this.chart.render();
                },
                destroyChart() {
                    if (this.chart) {
                        this.chart.destroy();
                        this.chart = null;
                    }
                }
            }"
            x-init="initChart(); $wire.on('chart-data-{{ $type }}', (data) => { destroyChart(); $nextTick(() => { initChart(); }); })"
            x-on:chart-refresh-{{ $type }}.window="destroyChart(); $nextTick(() => { initChart(); })"
            wire:key="chart-{{ $type }}"
        >
            <div x-ref="chartContainer" class="apex-chart" aria-hidden="true"></div>
        </div>
    @endif
</div>
