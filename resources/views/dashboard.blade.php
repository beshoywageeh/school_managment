@extends('layouts.app')

@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@push('css')
<style>
    /* General Dashboard Styles */
    .main-content {
        background-color: #f4f7f6;
    }

    .dashboard-heading {
        font-weight: 700;
        color: #333;
        margin-bottom: 1.5rem;
    }

    /* Fast Add Button */
    .fast-add-btn {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        color: white;
        padding: 1rem;
        border-radius: 0.75rem;
        font-size: 1.2rem;
        font-weight: 600;
        width: 100%;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
    }
    .fast-add-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
        color: white;
    }

    /* Stat Cards */
    .dashboard-stat-card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .dashboard-stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.75rem 1.5rem rgba(0,0,0,0.12);
    }
    .dashboard-stat-card .card-body {
        display: flex;
        align-items: center;
        padding: 1.5rem;
    }
    .dashboard-stat-card .stat-icon {
        font-size: 2.5rem;
        padding: 1rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }
    .dashboard-stat-card .stat-count {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
        color: #333;
    }
    .dashboard-stat-card .stat-label {
        font-size: 1rem;
        font-weight: 500;
        color: #6c757d;
        margin: 0;
    }

    /* Quick Actions */
    .quick-action-tile {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-radius: 1rem;
        padding: 1.5rem 1rem;
        text-align: center;
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.08);
        height: 100%;
    }
    .quick-action-tile:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.75rem 1.5rem rgba(0,0,0,0.12);
        color: #007bff;
    }
    .quick-action-tile .action-icon {
        margin-bottom: 1rem;
        color: #007bff;
    }
    .quick-action-tile .action-label {
        font-weight: 600;
        margin: 0;
    }

    /* Chart Cards */
    .chart-card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.08);
        padding: 1.5rem;
    }
</style>
@endpush

@section('content')

    @php
    $stat_icons = [
        'Students' => ['icon' => 'fa-user-graduate', 'color' => 'bg-primary'],
        'parents' => ['icon' => 'fa-users', 'color' => 'bg-success'],
        'employees' => ['icon' => 'fa-user-tie', 'color' => 'bg-info'],
    ];

    $action_icons = [
        'Students' => 'fa-user-plus',
        'parents' => 'fa-user-friends',
        'Grade' => 'fa-layer-group',
        'Class_Rooms' => 'fa-chalkboard',
        'schoolfees' => 'fa-file-invoice-dollar',
        'jobs' => 'fa-briefcase',
        'backup' => 'fa-database',
    ];
    @endphp

    <!-- Fast Add Button -->
    @can('classes-create')
        <div class="row mb-4">
            <div class="col">
                <a href="#" data-toggle="modal" data-target="#fastadd" class="fast-add-btn">
                    <i class="fas fa-plus mr-2"></i>
                    {{ trans('general.new') . ' ' . trans('Sidebar.Students') }}
                </a>
                @include('backend.Students.fast_add_student')
            </div>
        </div>
    @endcan

    <!-- Stat Cards -->
    <div class="row mb-4">
        @can('Students-list')
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-stat-card h-100">
                    <div class="card-body">
                        <div class="stat-icon {{ $stat_icons['Students']['color'] }}">
                            <i class="fas {{ $stat_icons['Students']['icon'] }}"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="stat-count">{{ $students }}</h3>
                            <p class="stat-label">{{ trans('Sidebar.Students') }}</p>
                        </div>
                        <a href="{{ route('Students.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endcan
        @can('parents-list')
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-stat-card h-100">
                    <div class="card-body">
                        <div class="stat-icon {{ $stat_icons['parents']['color'] }}">
                            <i class="fas {{ $stat_icons['parents']['icon'] }}"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="stat-count">{{ $parents }}</h3>
                            <p class="stat-label">{{ trans('Sidebar.parents') }}</p>
                        </div>
                        <a href="{{ route('parents.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endcan
        @can('employees-list')
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-stat-card h-100">
                    <div class="card-body">
                        <div class="stat-icon {{ $stat_icons['employees']['color'] }}">
                            <i class="fas {{ $stat_icons['employees']['icon'] }}"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="stat-count">{{ $employees }}</h3>
                            <p class="stat-label">{{ trans('Sidebar.employees') }}</p>
                        </div>
                        <a href="{{ route('employees.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endcan
    </div>

    <!-- Quick Actions -->
    <div class="row mb-4">
        <div class="col-12">
            <h4 class="dashboard-heading">{{ trans('general.quick_actions') }}</h4>
        </div>
        @can('Students-create')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('Students.create') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fas {{ $action_icons['Students'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('general.new') }} {{ trans('Sidebar.Students') }}</p>
                </a>
            </div>
        @endcan
        @can('parents-create')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('parents.create') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fas {{ $action_icons['parents'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('general.new') }} {{ trans('Sidebar.parents') }}</p>
                </a>
            </div>
        @endcan
        @can('grade-list')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('grade.index') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fas {{ $action_icons['Grade'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('Sidebar.Grade') }}</p>
                </a>
            </div>
        @endcan
        @can('class_rooms-list')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('class_rooms.index') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fas {{ $action_icons['Class_Rooms'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('Sidebar.Class_Rooms') }}</p>
                </a>
            </div>
        @endcan
        @can('schoolfees-create')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('schoolfees.create') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fas {{ $action_icons['schoolfees'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('Sidebar.schoolfees') }}</p>
                </a>
            </div>
        @endcan
        @can('jobs-list')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('jobs.index') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fas {{ $action_icons['jobs'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('Sidebar.jobs') }}</p>
                </a>
            </div>
        @endcan
        @can('backup-list')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('backup.create') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fas {{ $action_icons['backup'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('backup.create') }}</p>
                </a>
            </div>
        @endcan
    </div>

    <!--Charts-->
    <div class="row mb-4">
        @if (Auth::user()->hasAnyPermission([
                'academic_year-list',
                'schoolfees-list',
                'fee_invoice-list',
                'Recipt_Payment-list',
                'except_fee-list',
                'payment_parts-list',
                'exchange_bonds-list',
            ]))
            <div class="col-lg-6 mb-4">
                <div class="card chart-card h-100">
                    <h5 class="card-title text-center dashboard-heading">{{ trans('Sidebar.accounting') }}</h5>
                    <div class="chart-wrapper">
                        <canvas id="canvas3" style="width: 100%; height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        @endif
        @if (Auth::user()->hasAnyPermission(['Students-list', 'grade-list']))
            <div class="col-lg-6 mb-4">
                <div class="card chart-card h-100">
                    <h5 class="card-title text-center dashboard-heading">{{ trans('report.student_numbers') }}</h5>
                    <div class="chart-wrapper">
                        <canvas id="canvas4" style="width: 100%; height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    {{-- Scripts are unchanged --}}
    <script>
        const ctx3 = document.getElementById('canvas3').getContext('2d');
        new Chart(ctx3, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [{{ $credit }}, {{ $payment_parts }}, {{ $payments }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                    ],
                    borderColor: '#fff',
                    borderWidth: 2,
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
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels: {
                        fontColor: "#6c757d",
                        padding: 20
                    },
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        });

        const ctx4 = document.getElementById('canvas4').getContext('2d');
        new Chart(ctx4, {
            type: 'bar',
            data: {
                datasets: [{
                    data: {!! json_encode($chart_data) !!},
                    backgroundColor: {!! json_encode($chart_bg_colors) !!},
                    borderColor: {!! json_encode($chart_border_colors) !!},
                    borderWidth: 1,
                    borderRadius: 5
                }],
                labels: {!! json_encode($chart_labels) !!}
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            autoSkip: false
                        }
                    }]
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const birthDateInput = document.querySelector('input[name="birth_date"]');
            const checkBirthInput = document.querySelector('input[name="check_birth"]');

            if (birthDateInput && checkBirthInput) {
                const makeDate = () => {
                    const date = new Date();
                    date.setFullYear(new Date().getFullYear()); // Set to current year
                    date.setMonth(9); // October (months are 0-indexed)
                    date.setDate(1);
                    return date;
                };

                birthDateInput.addEventListener('change', () => {
                    const birthDate = new Date(birthDateInput.value);
                    const checkDate = new Date(makeDate());
                    console.log(checkDate);
                    const diffTime = Math.abs(checkDate - birthDate);
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                    const years = Math.floor(diffDays / 365);
                    const months = Math.floor((diffDays % 365) / 30);
                    const days = (diffDays % 365) % 30;
                    checkBirthInput.value = `${years} سنه, ${months} شهر, ${days} يوم`;
                });
            } else {
                // console.error('Input elements not found');
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#grades').on('change', function() {
                classrooms.innerHTML = '<option>{{ trans('general.loading') }}</option>';
                let grade = $(this).val();
                if (grade) {
                    $.ajax({
                        url: "{{ URL::to('/ajax/get_classRooms') }}/" + grade,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#classrooms').empty();
                            $('#classrooms').append(
                                '<option selected disabled>{{ trans('student.choose_classroom') }}</option>'
                            );
                            $.each(data, function(key, value) {
                                console.log(key);
                                console.log(value.name);
                                $('#classrooms').append(
                                    `<option value="${value.id}">${value.name}</option>`
                                );

                            });
                        },
                    });
                };
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#fastadd form').on('submit', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                $.ajax({
                    url: "{{ URL::to('/ajax/fast_add') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            // $('#fastadd').modal('hide');
                            $('#fastadd form')[0].reset();
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message,
                                showConfirmButton: true
                            });
                        }
                    },
                    error: function(response) {
                        let errors = response.responseJSON.errors;
                        let errorMessage = '';
                        for (let key in errors) {
                            errorMessage += errors[key][0] + '\n';
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error!',
                            text: errorMessage,
                            showConfirmButton: true
                        });
                    }
                });
            });
        });
    </script>
@endpush
