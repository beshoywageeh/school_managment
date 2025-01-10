@extends('layouts.app')

@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@section('content')
    <div class="row mb-30">
        @include('components.stat_card', [
            'icon' => 'students.png',
            'count' => $students,
            'label' => trans('Sidebar.Students'),
            'route' => 'Students.index',
        ])
        @include('components.stat_card', [
            'icon' => 'parents.png',
            'count' => $parents,
            'label' => trans('Sidebar.parents'),
            'route' => 'parents.index',
        ])
        @include('components.stat_card', [
            'icon' => 'employees.png',
            'count' => $employees,
            'label' => trans('Sidebar.employees'),
            'route' => 'employees.index',
        ])
    </div>

    <div class="row mb-30">
        <div class="col-md-6 mb-30">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="text-center card-title">{{ trans('Sidebar.accounting') }}</h5>
                    <div class="chart-wrapper">
                        <div id="canvas-holder" style="width: 100%; margin: 0 auto; height: 300px;">
                            <canvas id="canvas3" width="550"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-30">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="text-center card-title">{{ trans('report.student_numbers') }}</h5>
                    <div class="chart-wrapper">
                        <div id="canvas-holder" style="width: 100%; margin: 0 auto; height: 300px;">
                            <canvas id="canvas4" width="550"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-30">
        @can('Students-create')
            @include('components.action_button', [
                'icon' => 'students.png',
                'label' => trans('Sidebar.Students') . ' ' . trans('general.new'),
                'route' => 'Students.create',
            ])
        @endcan
        @can('parents-create')
            @include('components.action_button', [
                'icon' => 'parents.png',
                'label' => trans('Sidebar.parents') . ' ' . trans('general.new'),
                'route' => 'parents.create',
            ])
        @endcan
        @can('grade-list')
            @include('components.action_button', [
                'icon' => 'score.png',
                'label' => trans('Sidebar.Grade'),
                'route' => 'grade.index',
            ])
        @endcan
        @can('class_rooms-list')
            @include('components.action_button', [
                'icon' => 'classroom.png',
                'label' => trans('Sidebar.Class_Rooms'),
                'route' => 'class_rooms.index',
            ])
        @endcan
        @can('schoolfees-create')
            @include('components.action_button', [
                'icon' => 'money.png',
                'label' => trans('Sidebar.schoolfees'),
                'route' => 'schoolfees.create',
            ])
        @endcan
        @can('jobs-list')
            @include('components.action_button', [
                'icon' => 'job.png',
                'label' => trans('Sidebar.jobs') . ' ' . trans('general.new'),
                'route' => 'jobs.index',
            ])
        @endcan
    </div>
@endsection

@push('scripts')
    <script>
        const ctx3 = document.getElementById('canvas3').getContext('2d');
        new Chart(ctx3, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [{{ $credit }}, {{ $payment_parts }}, {{ $payments }}],
                    backgroundColor: [
                       'rgba(255, 99, 132, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(255, 205, 86, 0.5)',
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    '{{ trans('Sidebar.credit') }}',
                    '{{ trans('Sidebar.payment_parts') }}',
                    '{{ trans('Sidebar.Recipt_Payment') }}'
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: "#9295a2"
                    }
                }
            }
        });

        const ctx4 = document.getElementById('canvas4').getContext('2d');
        new Chart(ctx4, {
            type: 'bar',
            data: {
                datasets: [{
                    data: [
                        @foreach ($grades as $grade)
                            "{{ $grade->students_count }}",
                        @endforeach
                    ],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 2,
                    label: ''
                }],
                labels: [
                    @foreach ($grades as $grade)
                        '{{ $grade->name }}',
                    @endforeach
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: "#9295a2"
                    }
                }
            }
        });
    </script>
@endpush
