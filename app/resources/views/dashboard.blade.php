@extends('layouts.app')

@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@section('content')
    <!-- Stat Cards -->
    <div class="flex flex-wrap gap-4 mb-6" >
        @can('Students-list')
            <x-stat_card class="border-blue-400">
                <div class="w-16 h-16 rounded-xl bg-blue-500 flex items-center justify-center text-white">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $students }}</h3>
                    <p class="text-gray-500">{{ trans('Sidebar.Students') }}</p>
                </div>
            </x-stat_card>
        @endcan

        @can('parents-list')
            <x-stat_card class="border-green-400">
                <div class="w-16 h-16 rounded-xl bg-green-500 flex items-center justify-center text-white">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $parents }}</h3>
                    <p class="text-gray-500">{{ trans('Sidebar.parents') }}</p>
                </div>
            </x-stat_card>
        @endcan

        @can('employees-list')
            <x-stat_card class="border-cyan-400">
                <div class="w-16 h-16 rounded-xl bg-cyan-500 flex items-center justify-center text-white">
                    <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-gray-800">{{ $employees }}</h3>
                    <p class="text-gray-500">{{ trans('Sidebar.employees') }}</p>
                </div>
            </x-stat_card>
        @endcan

        <!-- Financial Summary Cards -->
        @if (Auth::user()->hasAnyPermission(['schoolfees-list', 'fee_invoice-list', 'Recipt_Payment-list']))
                <x-stat_card>
                    <div class="w-16 h-16 rounded-xl bg-yellow-500 flex items-center justify-center text-white">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">{{ number_format($totalInvoiced, 2) }}</h3>
                        <p class="text-gray-500">{{ trans('Sidebar.fees_invoice') }} (Total)</p>
                    </div>
                </x-stat_card>
                <x-stat_card class="border-green-400">
                    <div class="w-16 h-16 rounded-xl bg-green-500 flex items-center justify-center text-white">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">{{ number_format($totalPaid, 2) }}</h3>
                        <p class="text-gray-500">{{ trans('Sidebar.Recipt_Payment') }} (Total)</p>
                    </div>
                </x-stat_card>
                <x-stat_card class="border-red-400">
                        <div class="w-16 h-16 rounded-xl bg-red-500 flex items-center justify-center text-white">
                            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.342-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">{{ number_format($totalInvoiced - $totalPaid, 2) }}
                            </h3>
                            <p class="text-gray-500">{{ trans('Sidebar.pending_balance') }}</p>
                        </div>
                </x-stat_card>

        @endif
    </div>


    <!-- Quick Actions -->
    <div class="flex flex-wrap gap-4 mb-6">
        @can('Students-create')
            <a href="{{ route('students.index') }}" class="flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 text-center text-white no-underline transition-all duration-300 shadow-md h-full hover:-translate-y-1 hover:shadow-blue-400/40 hover:text-white">
                <div class="mb-4 text-white">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
                <p class="font-semibold m-0">{{ trans('general.buttons.create') }} {{ trans('Sidebar.Students') }}</p>
            </a>
        @endcan

        @can('parents-create')
            <a href="{{ route('parents.create') }}" class="flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 text-center text-white no-underline transition-all duration-300 shadow-md h-full hover:-translate-y-1 hover:shadow-blue-400/40 hover:text-white">
                <div class="mb-4 text-white">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <p class="font-semibold m-0">{{ trans('general.buttons.create') }} {{ trans('Sidebar.parents') }}</p>
            </a>
        @endcan

        @can('grade-list')
            <a href="{{ route('grade.index') }}" class="flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 text-center text-white no-underline transition-all duration-300 shadow-md h-full hover:-translate-y-1 hover:shadow-blue-400/40 hover:text-white">
                <div class="mb-4 text-white">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                </div>
                <p class="font-semibold m-0">{{ trans('Sidebar.Grade') }}</p>
            </a>
        @endcan

        @can('class_rooms-list')
            <a href="{{ route('class_rooms.index') }}" class="flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 text-center text-white no-underline transition-all duration-300 shadow-md h-full hover:-translate-y-1 hover:shadow-blue-400/40 hover:text-white">
                <div class="mb-4 text-white">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <p class="font-semibold m-0">{{ trans('Sidebar.Class_Rooms') }}</p>
            </a>
        @endcan

        @can('jobs-list')
            <a href="{{ route('jobs.index') }}" class="flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 text-center text-white no-underline transition-all duration-300 shadow-md h-full hover:-translate-y-1 hover:shadow-blue-400/40 hover:text-white">
                <div class="mb-4 text-white">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class="font-semibold m-0">{{ trans('Sidebar.jobs') }}</p>
            </a>
        @endcan

        @can('backup-list')
            <a href="{{ route('backup.create') }}" class="flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl p-6 text-center text-white no-underline transition-all duration-300 shadow-md h-full hover:-translate-y-1 hover:shadow-blue-400/40 hover:text-white">
                <div class="mb-4 text-white">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                </div>
                <p class="font-semibold m-0">{{ trans('general.buttons.create') }} {{ trans('backup.title') }}</p>
            </a>
        @endcan

    </div>

    <!-- Charts -->
    <div class="flex gap-6 mb-6">
        @if (Auth::user()->hasAnyPermission([
                'academic_year-list',
                'schoolfees-list',
                'fee_invoice-list',
                'Recipt_Payment-list',
                'except_fee-list',
                'payment_parts-list',
                'exchange_bonds-list',
            ]))
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex-1 basis-1/2 min-w-[300px]">
                <h5 class="text-lg font-semibold text-gray-800 mb-4 text-center">{{ trans('Sidebar.accounting') }}</h5>
                <div class="chart-wrapper">
                    <canvas id="canvas3" class="w-full h-[300px]"></canvas>
                </div>
            </div>
        @endif

        @if (Auth::user()->hasAnyPermission(['Students-list', 'grade-list']))
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex-1 basis-1/2 min-w-[300px]">
                <h5 class="text-lg font-semibold text-gray-800 mb-4 text-center">{{ trans('report.student_numbers') }}
                </h5>
                <div id="student_number">

                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const el = document.querySelector('#student_number');
            if (!el) return;
            const options = {
                chart: {
                    type: 'line',
                    height: 350,
                },
                series: [{
                    name: '{{ trans('report.student_numbers') }}',
                    data: @json($chart_data)
                }],
                colors: 'Indigo',
                xaxis: {
                    categories: @json($chart_labels)
                },
            };
            const chart = new ApexCharts(el, options);
            chart.render();
        });

     </script>
@endpush
