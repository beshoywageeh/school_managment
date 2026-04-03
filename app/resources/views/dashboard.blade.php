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


        /* Stat Cards */
        .dashboard-stat-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .dashboard-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.12);
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
            background: linear-gradient(45deg, #007bff, #0056b3);
            border-radius: 1rem;
            padding: 1.5rem 1rem;
            text-align: center;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .quick-action-tile:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
            color: white;
        }

        .quick-action-tile .action-icon {
            margin-bottom: 1rem;
            color: #fff;
        }

        .quick-action-tile .action-label {
            font-weight: 600;
            margin: 0;
        }

        /* Chart Cards */
        .chart-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
        }

        /* Activity Log */
        .activity-item {
            border-left: 2px solid #e9ecef;
            padding-left: 1.5rem;
            padding-bottom: 1.5rem;
            position: relative;
        }

        .activity-item:last-child {
            border-left: none;
            padding-bottom: 0;
        }

        .activity-item::before {
            content: '';
            position: absolute;
            left: -6px;
            top: 0;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #007bff;
        }

        .activity-time {
            font-size: 0.8rem;
            color: #6c757d;
        }

        .activity-user {
            font-weight: 600;
            color: #333;
        }

        /* Tables */
        .dashboard-table thead th {
            border-top: none;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            color: #6c757d;
        }
    </style>
@endpush

@section('content')
    @php
        $stat_icons = [
            'Students' => ['icon' => 'fa-graduation-cap', 'color' => 'bg-primary'],
            'parents' => ['icon' => 'fa-users', 'color' => 'bg-success'],
            'employees' => ['icon' => 'fa-black-tie', 'color' => 'bg-info'],
            'totalInvoiced' => ['icon' => 'fa-money', 'color' => 'bg-warning'],
            'totalPaid' => ['icon' => 'fa-check-circle', 'color' => 'bg-success'],
            'pending' => ['icon' => 'fa-exclamation-triangle', 'color' => 'bg-danger'],
        ];

        $action_icons = [
            'Students' => 'fa-user-plus',
            'parents' => 'fa-users',
            'Grade' => 'fa-list-alt',
            'Class_Rooms' => 'fa-list-ol',
            'schoolfees' => 'fa-money',
            'jobs' => 'fa-black-tie',
            'backup' => 'fa-database',
        ];
    @endphp

    <!-- Stat Cards -->
    <div class="row mb-4">
        @can('Students-list')
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-stat-card h-100">
                    <div class="card-body">
                        <div class="stat-icon {{ $stat_icons['Students']['color'] }}">
                            <i class="fa {{ $stat_icons['Students']['icon'] }}"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="stat-count">{{ $students }}</h3>
                            <p class="stat-label">{{ trans('Sidebar.Students') }}</p>
                        </div>
                        <a href="{{ route('students.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endcan
        @can('parents-list')
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-stat-card h-100">
                    <div class="card-body">
                        <div class="stat-icon {{ $stat_icons['parents']['color'] }}">
                            <i class="fa {{ $stat_icons['parents']['icon'] }}"></i>
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
                            <i class="fa {{ $stat_icons['employees']['icon'] }}"></i>
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

    <!-- Financial Summary Cards -->
    @if (Auth::user()->hasAnyPermission(['schoolfees-list', 'fee_invoice-list', 'Recipt_Payment-list']))
        <div class="row mb-4">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-stat-card h-100 border-left-warning">
                    <div class="card-body">
                        <div class="stat-icon {{ $stat_icons['totalInvoiced']['color'] }}">
                            <i class="fa {{ $stat_icons['totalInvoiced']['icon'] }}"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="stat-count">{{ number_format($totalInvoiced, 2) }}</h3>
                            <p class="stat-label">{{ trans('Sidebar.fees_invoice') }} (Total)</p>
                        </div>
                        <a href="{{ route('fee-invoice.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-stat-card h-100 border-left-success">
                    <div class="card-body">
                        <div class="stat-icon {{ $stat_icons['totalPaid']['color'] }}">
                            <i class="fa {{ $stat_icons['totalPaid']['icon'] }}"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="stat-count">{{ number_format($totalPaid, 2) }}</h3>
                            <p class="stat-label">{{ trans('Sidebar.Recipt_Payment') }} (Total)</p>
                        </div>
                        <a href="{{ route('receipt-payment.index') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card dashboard-stat-card h-100 border-left-danger">
                    <div class="card-body">
                        <div class="stat-icon {{ $stat_icons['pending']['color'] }}">
                            <i class="fa {{ $stat_icons['pending']['icon'] }}"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="stat-count">{{ number_format($totalInvoiced - $totalPaid, 2) }}</h3>
                            <p class="stat-label">{{trans('Sidebar.pending_balance')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <!-- Quick Actions -->
    <div class="row mb-4">

        @can('Students-create')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="#" data-toggle="modal" data-target="#fastadd" class="quick-action-tile">
                    <div class="action-icon"><i class="fa {{ $action_icons['Students'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('general.buttons.create') }} {{ trans('Sidebar.Students') }}</p>

                </a>
                @include('backend.Students.fast_add_student')
            </div>
        @endcan
        @can('parents-create')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('parents.create') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fa {{ $action_icons['parents'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('general.buttons.create') }} {{ trans('Sidebar.parents') }}</p>
                </a>
            </div>
        @endcan
        @can('grade-list')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="#" data-toggle="modal" data-target="#CreateGrade" class="quick-action-tile">
                    <div class="action-icon"><i class="fa {{ $action_icons['Grade'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('Sidebar.Grade') }}</p>
                </a>
                @include('backend.Grades.create')
            </div>
        @endcan
        @can('class_rooms-list')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="#" data-toggle="modal" data-target="#CreateClassRoom" class="quick-action-tile">
                    <div class="action-icon"><i class="fa {{ $action_icons['Class_Rooms'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('Sidebar.Class_Rooms') }}</p>
                </a>
                @include('backend.class_rooms.create')
            </div>
        @endcan

        @can('jobs-list')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="#" data-toggle="modal" data-target="#Create_Job" class="quick-action-tile">
                    <div class="action-icon"><i class="fa {{ $action_icons['jobs'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('Sidebar.jobs') }}</p>
                </a>
                @include('backend.Job.create')
            </div>
        @endcan
        @can('backup-list')
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-4">
                <a href="{{ route('backup.create') }}" class="quick-action-tile">
                    <div class="action-icon"><i class="fa {{ $action_icons['backup'] }} fa-2x"></i></div>
                    <p class="action-label">{{ trans('general.buttons.create') . ' ' . trans('backup.title') }}</p>
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


@push('js')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const birthDateInput = document.querySelector('input[name="birth_date"]');
            const checkBirthInput = document.querySelector('input[name="check_birth"]');

            if (birthDateInput && checkBirthInput) {
                birthDateInput.addEventListener('change', () => {
                    const birthDate = new Date(birthDateInput.value);
                    const now = new Date();

                    let years = now.getFullYear() - birthDate.getFullYear();
                    let months = now.getMonth() - birthDate.getMonth();
                    let days = now.getDate() - birthDate.getDate();

                    if (days < 0) {
                        months--;
                        const prevMonth = new Date(now.getFullYear(), now.getMonth(), 0);
                        days += prevMonth.getDate();
                    }

                    if (months < 0) {
                        years--;
                        months += 12;
                    }

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
