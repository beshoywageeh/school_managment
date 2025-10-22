@extends('layouts.app')

@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@section('content')
    @can('classes-create')
        <div class="row mb-30">

            <div class="col ">
                <x-button type="" data-toggle="modal" data-target="#fastadd" class="primary btn-block">
                    <h4 class="text-center text-white bold">
                        <i class="ti-plus"></i>

                        {{ trans('class_rooms.new') }}
                    </h4>
                </x-button>
                @include('backend.Students.fast_add_student')
            </div>
        </div>
    @endcan
    <!--Stat Card-->
    <div class="row mb-30">
        @can('Students-list')
            @include('components.stat_card', [
                'icon' => 'students.png',
                'count' => $students,
                'label' => trans('Sidebar.Students'),
                'route' => 'Students.index',
            ])
        @endcan
        @can('parents-list')
            @include('components.stat_card', [
                'icon' => 'parents.png',
                'count' => $parents,
                'label' => trans('Sidebar.parents'),
                'route' => 'parents.index',
            ])
        @endcan
        @can('employees-list')
            @include('components.stat_card', [
                'icon' => 'employees.png',
                'count' => $employees,
                'label' => trans('Sidebar.employees'),
                'route' => 'employees.index',
            ])
        @endcan
    </div>
    <!--Fasty Action Button-->
    <div class="row mb-30">
        @can('Students-create')
            @include('components.action_button', [
                'icon' => 'students.png',
                'label' => trans('Sidebar.Students'),
                'route' => 'Students.create',
            ])
        @endcan
        @can('parents-create')
            @include('components.action_button', [
                'icon' => 'parents.png',
                'label' => trans('Sidebar.parents'),
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
                'label' => trans('Sidebar.jobs'),
                'route' => 'jobs.index',
            ])
        @endcan
        @can('backup-list')
            @include('components.action_button', [
                'icon' => 'data-recovery.png',
                'label' => trans('backup.create'),
                'route' => 'backup.create',
            ])
        @endcan
    </div>
    <!--Charts-->
    <div class="row mb-30">
        @if (Auth::user()->hasAnyPermission([
                'academic_year-list',
                'schoolfees-list',
                'fee_invoice-list',
                'Recipt_Payment-list',
                'except_fee-list',
                'payment_parts-list',
                'exchange_bonds-list',
            ]))
            <div class="col-md-6 mb-30">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center card-title">
                            {{ trans('Sidebar.accounting') }}
                        </h5>
                        <div class="chart-wrapper">
                            <div id="canvas-holder" style="width: 100%; margin: 0 auto; height: 300px;">
                                <canvas id="canvas3" width="550"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (Auth::user()->hasAnyPermission(['Students-list', 'grade-list']))
            <div class="col-md-6 mb-30">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center card-title">
                            {{ trans('report.student_numbers') }}
                        </h5>
                        <div class="chart-wrapper">
                            <div id="canvas-holder" style="width: 100%; margin: 0 auto; height: 300px;">
                                <canvas id="canvas4" width="550"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
                        fontColor: "#9295a2",
                    },
                }
            }
        });

        const ctx4 = document.getElementById('canvas4').getContext('2d');
        new Chart(ctx4, {
            type: 'bar',
            data: {
                datasets: [{
                    data: {!! json_encode($grades->pluck('students_count')) !!},
                    backgroundColor: {!! json_encode(
                        $grades->map(function () {
                            return 'rgba(' . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ', 0.2)';
                        }),
                    ) !!},
                    borderColor: {!! json_encode(
                        $grades->map(function ($grade, $index) {
                            return 'rgba(' . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ', 1)';
                        }),
                    ) !!},
                    borderWidth: 2,
                    label: ''
                }],
                labels: {!! json_encode($grades->pluck('name')) !!}
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
                console.error('Input elements not found');
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
                            $('#fastadd').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                location.reload();
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
