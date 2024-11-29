@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@section('content')
    <div class="row mb-30">
        <div class="col-xl-4 mb-30">
            <div class="card card-statistics fb-bg h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left icon-box-fixed">
                            <img class="img img-responsive" width="50"
                                src="{{ URL::asset('assests/images/Sidebar/students.png') }}">
                        </div>
                        <div class="float-right text-right">
                            <h4 class="text-white">{{ $students }}</h4>
                            <a href="{{ route('Students.index') }}"
                                class="text-white card-text">{{ trans('Sidebar.Students') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-30">
            <div class="card card-statistics youtube-bg h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left icon-box-fixed">
                            <img class="img img-responsive" width="50"
                                src="{{ URL::asset('assests/images/Sidebar/parents.png') }}" alt="">
                        </div>
                        <div class="float-right text-right">
                            <h4 class="text-white">{{ $parents }}</h4>
                            <a href="{{ route('parents.index') }}"
                                class="text-white card-text">{{ trans('Sidebar.parents') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-30">
            <div class="card card-statistics twitter-bg h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left icon-box-fixed">
                            <img width="50" src="{{ URL::asset('assests/images/Sidebar/employees.png') }}"
                                alt="">
                        </div>
                        <div class="float-right text-right">
                            <h4 class="text-white">{{ $employees }}</h4>
                            <a href="{{ route('employees.index') }}"
                                class="text-white card-text">{{ trans('Sidebar.employees') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-30">
        <div class="col-md-6 mb-30">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="text-center card-title">{{ trans('Sidebar.accounting') }} </h5>
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
                    <h5 class="text-center card-title">{{ trans('report.student_numbers') }} </h5>
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
            <div class="col-lg-2">
                <a href="{{ route('Students.create') }}" class="py-5 btn btn-primary btn-block"><img
                        src="{{ URL::asset('assests/images/Sidebar/students.png') }}" width="70" alt=""><br>
                    <h5 class="text-white">{{ trans('Sidebar.Students') }} {{ trans('general.new') }}</h5>
                </a>
            </div>
        @endcan
        @can('parents-create')
            <div class="col-lg-2">
                <a href="{{ route('parents.create') }}" class="py-5 btn btn-primary dashboard-btn btn-block"><img
                        src="{{ URL::asset('assests/images/Sidebar/parents.png') }}" width="70" alt=""><br>
                    <h5 class="text-white">{{ trans('Sidebar.parents') }} {{ trans('general.new') }}</h5>
                </a>
            </div>
        @endcan
        @can('grade-list')
            <div class="col-lg-2">
                <a href="{{ route('grade.index') }}" class="py-5 btn btn-primary dashboard-btn btn-block"><img
                        src="{{ URL::asset('assests/images/Sidebar/score.png') }}" width="70" alt=""><br>
                    <h5 class="text-white">{{ trans('Sidebar.Grade') }}</h5>
                </a>
            </div>
        @endcan
        @can('class_rooms-list')
            <div class="col-lg-2">
                <a href="{{ route('class_rooms.index') }}" class="py-5 btn btn-primary dashboard-btn btn-block"><img
                        src="{{ URL::asset('assests/images/Sidebar/classroom.png') }}" width="70" alt=""><br>
                    <h5 class="text-white">{{ trans('Sidebar.Class_Rooms') }}</h5>
                </a>
            </div>
        @endcan
        @can('schoolfees-create')
            <div class="col-lg-2">
                <a href="{{ route('schoolfees.create') }}" class="py-5 btn btn-primary dashboard-btn btn-block"><img
                        src="{{ URL::asset('assests/images/Sidebar/money.png') }}" width="70" alt=""><br>
                    <h5 class="text-white">{{ trans('Sidebar.schoolfees') }}</h5>
                </a>
            </div>
        @endcan
        @can('jobs-list')
            <div class="col-lg-2">
                <a href="{{ route('jobs.index') }}" class="py-5 btn btn-primary dashboard-btn btn-block"><img
                        src="{{ URL::asset('assests/images/Sidebar/job.png') }}" width="70" alt=""><br>
                    <h5 class="text-white">{{ trans('Sidebar.jobs') }} {{ trans('general.new') }}</h5>
                </a>
            </div>
        @endcan

    </div>
@endsection
@push('scripts')
    <script>
        var ctx3 = document.getElementById('canvas3').getContext('2d');
        var config3 = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: ["{{ $credit }}", "{{ $payment_parts }}", "{{ $payments }}"],
                    backgroundColor: [window.chartColors.red, window.chartColors.orange, window.chartColors
                        .yellow
                    ],
                    label: 'Dataset 1'
                }],
                labels: (['{{ trans('Sidebar.credit') }}', '{{ trans('Sidebar.payment_parts') }}',
                    '{{ trans('Sidebar.Recipt_Payment') }}'
                ])
            },
            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: "#9295a2"
                    }
                },

            }
        });
    </script>
    <script>
        var ctx3 = document.getElementById('canvas4').getContext('2d');
        var config3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                datasets: [{
                    data: [
                        @foreach ($grades as $grade)
                            "{{ $grade->students_count }}",
                        @endforeach
                    ],
                    backgroundColor: [window.chartColors.red, window.chartColors.orange, window.chartColors.yellow
                    ],
                    label:'',
                }],
                labels: ([
                    @foreach ($grades as $grade)
                        '{{ $grade->name }}',
                    @endforeach
                ])
            },
            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: "#9295a2"
                    }
                },

            }
        });
    </script>
@endpush
