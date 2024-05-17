@extends('layouts.app')
@section('title')
    {{ trans('Grades.title') }}
@endsection
@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="flex justify-between mb-4">
                    <h4 class="card-title">{{ trans('Grades.title') }}</h4>
                    <x-button data-toggle="modal" data-target="#CreateGrade" type="" class="primary">
                        <i class="w-4" data-feather="plus-square"></i>
                        {{ trans('Grades.new') }}
                    </x-button>
                </div>
                <div class="table-resposive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('Grades.name') }}</th>
                                <th>{{ trans('grades.by') }}</th>
                                <th>{{ trans('grades.add_date') }}</th>
                                <th>{{ trans('grades.class_count') }}</th>
                                <th>{{ trans('grades.student_count') }}</th>
                                <th>{{ trans('grades.total_fees') }}</th>
                                <th>{{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['grades'] as $grade)
                                <tr>
                                    <td> {{ $data['grades']->firstItem() + $loop->index }}</td>
                                    <td>
                                        <a target='_blank'
                                            href="{{ route('grade.show', $grade->id) }}">{{ $grade->name }}</a>

                                    </td>
                                    <td>


                                        {{ $grade->user->name }}</td>
                                    <td>{{ $grade->created_at->format('Y/m/d') }}</td>
                                    <td>{{ $grade->class_room_count }}</td>
                                    <td>{{ $grade->students_count }}</td>
                                    <td>{{ number_format($grade->fees_sum_amount, 2) }}&nbsp;ج.م</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="items-center dropdown-toggle btn btn-primary btn-xs"><i
                                                    class="w-4" data-feather="chevron-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <ul class="dropdown-list">
                                                    <li class="dropdown-list-item">
                                                        <button class="dropdown-link" data-toggle="modal"
                                                            data-target="#grade-edit-{{ $grade->id }}">
                                                            <i class="w-4" data-feather="edit"></i>
                                                            {{ trans('general.edit') }}
                                                        </button>
                                                    </li>
                                                    <li class="dropdown-list-item">
                                                        <a href="{{ route('grade.destroy', $grade->id) }}"
                                                            class="dropdown-link" onclick="confirmation(event)"><i
                                                                class="w-4" data-feather="trash-2"></i>
                                                            {{ trans('general.delete') }}</a>
                                                    </li>
                                                    <li class="dropdown-list-item">
                                                        <a target="_blank" href="{{ route('grade.show', $grade->id) }}"
                                                            class="dropdown-link">
                                                            <i class="w-4" data-feather="info"></i>
                                                            {{ trans('general.info') }} </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @include('backend.Grades.edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('backend.Grades.Create')
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            //  import Swal from 'sweetalert2/dist/sweetalert2.js';

            function confirmation(ev) {
                ev.preventDefault();
                const urlToRedirect = ev.currentTarget.getAttribute('href');
                console.log(urlToRedirect);
                Swal.fire({
                    title: "{{ trans('general.confirm') }}",
                    text: "{{ trans('general.confirmation') }}",
                    icon: "warning",
                    showConfirmButton: true,
                    shoCancelButton: true,
                    dangerMode: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = urlToRedirect;
                    }
                });
            }
        </script>
    @endpush
@endsection
