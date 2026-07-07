@extends('layouts.app')
@section('title', 'لوحة التحكم')

@section('content')
<div class="flex flex-col gap-6">
    {{-- KPI Tiles --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <x-ui.kpi-tile label="إجمالي الطلاب" value="1,245" trend="12%" trendDirection="up" icon="users" endpoint="/api/dashboard/students-count" />
        <x-ui.kpi-tile label="إجمالي الموظفين" value="89" trend="3%" trendDirection="up" icon="id-card" endpoint="/api/dashboard/employees-count" />
        <x-ui.kpi-tile label="الرسوم المحصلة" value="₴ 850,000" trend="8%" trendDirection="up" icon="dollar-sign" endpoint="/api/dashboard/collected-fees" />
        <x-ui.kpi-tile label="المصروفات" value="₴ 320,000" trend="5%" trendDirection="down" icon="credit-card" endpoint="/api/dashboard/expenses" />
    </div>

    {{-- Charts --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl border border-gray-200 p-6">
            <h3 class="text-base font-semibold text-gray-900 mb-4">توزيع الطلاب حسب المرحلة</h3>
            <div id="donut-chart" x-init="
                const chart = new ApexCharts($el, {
                    chart: { type: 'donut', fontFamily: 'inherit' },
                    labels: ['ابتدائي', 'متوسط', 'ثانوي'],
                    series: [45, 30, 25],
                    colors: ['#2563eb', '#16a34a', '#d97706'],
                    legend: { position: 'bottom', rtl: true },
                });
                chart.render();
            "></div>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 p-6">
            <h3 class="text-base font-semibold text-gray-900 mb-4">التحصيل الشهري</h3>
            <div id="line-chart" x-init="
                const chart = new ApexCharts($el, {
                    chart: { type: 'area', fontFamily: 'inherit', toolbar: { show: false } },
                    series: [{ name: 'التحصيل', data: [30, 40, 35, 50, 49, 60, 70, 91, 125] }],
                    xaxis: { categories: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر'] },
                    colors: ['#2563eb'],
                    stroke: { curve: 'smooth' },
                    fill: { type: 'gradient' },
                    dataLabels: { enabled: false },
                });
                chart.render();
            "></div>
        </div>
    </div>

    {{-- Latest Records --}}
    <div>
        <h3 class="text-base font-semibold text-gray-900 mb-4">آخر المعاملات</h3>
        <x-ui.data-table
            endpoint="/api/dashboard/latest-transactions"
            :columns="[
                ['key' => 'id', 'label' => '#'],
                ['key' => 'description', 'label' => 'البيان'],
                ['key' => 'amount', 'label' => 'المبلغ', 'sortable' => true],
                ['key' => 'date', 'label' => 'التاريخ', 'sortable' => true],
            ]"
            :per-page="5">
        </x-ui.data-table>
    </div>
</div>
@endsection
