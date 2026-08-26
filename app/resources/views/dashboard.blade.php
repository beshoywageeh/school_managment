@extends('layouts.app')

@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@section('content')
<div x-data="dashboardWidgets()" class="space-y-6"
    x-effect="sidebarExpanded !== undefined && $nextTick(() => { studentChart?.resize(); revenueChart?.resize(); })">
    <template x-if="loading">
        <div class="space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <template x-for="i in 4" :key="i">
                    <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                        <div class="h-20 bg-muted rounded animate-pulse"></div>
                    </div>
                </template>
            </div>
        </div>
    </template> 

    <template x-if="error">
        <div class="bg-danger/10 border border-danger/20 rounded-xl p-6 text-danger text-center">
            <p x-text="error"></p>
        </div>
    </template>

    <template x-if="!loading && !error">
        <div class="space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <template x-for="(card, idx) in data.statCards" :key="idx">
                    <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 flex items-center gap-4 w-full">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center text-white shrink-0"
                            :style="cardBgStyle(card.color)">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-2xl font-bold text-gray-900" x-text="card.value"></p>
                            <p class="text-sm text-gray-500 truncate" x-text="card.label"></p>
                        </div>
                        <template x-if="card.trend">
                            <div class="flex flex-col items-end">
                                <span class="text-xs font-medium"
                                    :class="card.trendDirection === 'up' ? 'text-success' : 'text-danger'"
                                    x-text="(card.trendDirection === 'up' ? '▲ ' : '▼ ') + card.trend">
                                </span>
                            </div>
                        </template>
                        <template x-if="card.sparklineData && card.sparklineData.length > 0">
                            <svg class="w-16 h-8 ml-auto shrink-0" viewBox="0 0 60 30" preserveAspectRatio="none">
                                <polyline fill="none" stroke="var(--color-primary, #3b82f6)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    :points="sparklinePoints(card.sparklineData)"></polyline>
                            </svg>
                        </template>
                    </div>
                </template>
            </div>

            <div class="flex overflow-x-auto gap-4 pb-2 -mx-2 px-2 snap-x snap-mandatory scrollbar-none">
                <template x-for="(action, idx) in data.quickActions" :key="idx">
                    <a :href="action.route"
                        class="snap-start shrink-0 flex items-center gap-3 px-5 py-4 bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 no-underline text-gray-700 hover:text-gray-900">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium" x-text="action.label"></span>
                    </a>
                </template>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                    <h5 class="text-lg font-semibold text-gray-800 mb-4 text-center">{{ trans('report.student_numbers') }}</h5>
                    <div id="student_chart" x-init="renderStudentChart()"></div>
                </div>
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                    <h5 class="text-lg font-semibold text-gray-800 mb-4 text-center">{{ trans('Sidebar.accounting') }}</h5>
                    <div id="revenue_chart" x-init="renderRevenueChart()"></div>
                </div>
            </div>

            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                <h5 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('general.recent_activity') }}</h5>
                <div class="space-y-3">
                    <template x-for="(activity, idx) in data.recentActivity" :key="idx">
                        <div class="flex items-center gap-3 py-2 border-b border-gray-50 last:border-0">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm text-gray-700 truncate" x-text="activity.description"></p>
                                <p class="text-xs text-gray-400" x-text="activity.time"></p>
                            </div>
                        </div>
                    </template>
                    <template x-if="data.recentActivity.length === 0">
                        <p class="text-sm text-gray-400 text-center py-4">{{ trans('general.no_data') }}</p>
                    </template>
                </div>
            </div>
        </div>
    </template>
</div>
@endsection

@push('scripts')
<script>
    function dashboardWidgets() {
        return {
            loading: true,
            error: null,
            data: {
                statCards: [],
                quickActions: [],
                charts: {},
                recentActivity: [],
            },
            studentChart: null,
            revenueChart: null,

            cardColorMap: {
                blue: '#3b82f6',
                green: '#22c55e',
                red: '#ef4444',
                yellow: '#eab308',
                cyan: '#06b6d4',
                amber: '#f59e0b',
                indigo: '#6366f1',
                purple: '#a855f7',
                pink: '#ec4899',
                teal: '#14b8a6',
            },

            cardColor(color) {
                return this.cardColorMap[color] || '#3b82f6';
            },

            cardBgStyle(color) {
                return 'background-color: ' + this.cardColor(color);
            },

            init() {
                this.fetchWidgets();
            },

            fetchWidgets() {
                this.loading = true;
                this.error = null;
                axios.get('{{ route("dashboard.widgets") }}')
                    .then(response => {
                        this.data = response.data;
                    })
                    .catch(err => {
                        this.error = '{{ trans("general.error_fetching") }}';
                        console.error('Dashboard widgets error:', err);
                    })
                    .finally(() => {
                        this.loading = false;
                    });
            },

            renderStudentChart() {
                this.$nextTick(() => {
                    if (!this.data.charts?.studentChart) return;
                    const el = document.getElementById('student_chart');
                    if (!el) return;
                    const options = {
                        chart: { type: 'line', height: 300 },
                        series: [{ name: '{{ trans("report.student_numbers") }}', data: this.data.charts.studentChart.data }],
                        colors: ['var(--color-primary, #2563eb)'],
                        xaxis: { categories: this.data.charts.studentChart.labels },
                    };
                    this.studentChart = new ApexCharts(el, options);
                    this.studentChart.render();
                });
            },

            renderRevenueChart() {
                this.$nextTick(() => {
                    if (!this.data.charts?.revenueTrend) return;
                    const el = document.getElementById('revenue_chart');
                    if (!el) return;
                    const options = {
                        chart: { type: 'bar', height: 300 },
                        series: [{ name: '{{ trans("general.revenue") }}', data: this.data.charts.revenueTrend.data }],
                        colors: ['var(--color-success, #16a34a)'],
                        xaxis: { categories: this.data.charts.revenueTrend.labels },
                    };
                    this.revenueChart = new ApexCharts(el, options);
                    this.revenueChart.render();
                });
            },

            sparklinePoints(data) {
                if (!data || data.length < 2) return '';
                const w = 60, h = 30, pad = 2;
                const max = Math.max(...data, 1);
                const min = Math.min(...data);
                const range = max - min || 1;
                return data.map((val, i) => {
                    const x = pad + (i / (data.length - 1)) * (w - pad * 2);
                    const y = h - pad - ((val - min) / range) * (h - pad * 2);
                    return x.toFixed(1) + ',' + y.toFixed(1);
                }).join(' ');
            },
        };
    }
</script>
@endpush
