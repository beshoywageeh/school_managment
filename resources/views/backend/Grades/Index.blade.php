@extends('layouts.app')
@section('title')
    {{ trans('Grades.title') }}
@endsection
@section('content')
    @include('backend.Grades.Create')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h4>{{ trans('Grades.title') }}</h4>
                            </div>
                            <div class="col text-md-right">
                                @can('grade-create')
                                <x-button data-toggle="modal" data-target="#CreateGrade" type="" class="primary">
                                    <i class="ti-plus"></i>
                                    {{ trans('Grades.new') }}
                                </x-button>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('grade-list')
                        <table id="datatable" class="table p-0 text-center table-striped table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('Grades.name') }}</th>
                                    <th>{{ trans('grades.by') }}</th>
                                    <th>{{ trans('General.created_at') }}</th>
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
                                        <td><a target='_blank'
                                                href="{{ route('grade.show', $grade->id) }}">{{ $grade->name }}</a></td>
                                        <td>{{ $grade->user->name }}</td>
                                        <td>{{ $grade->created_at->format('Y/m/d') }}</td>
                                        <td>{{ $grade->class_room_count }}</td>
                                        <td>{{ $grade->students_count }}</td>
                                        <td>{{ Number::currency($grade->fees_sum_amount,'EGP','AR')}}</td>
                                        <td>
                                            @can('grade-edit')
                                            <button class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#grade-edit-{{ $grade->id }}">
                                                <i class="ti-pencil-alt"></i>
                                                {{ trans('general.edit') }}
                                            </button>
                                            @endcan
                                            <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'url' => route('grade.destroy', $grade->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can'=>'grade-delete'
                                                ],
                                                [
                                                    'url' => route('grade.show', $grade->id),
                                                    'text' => trans('general.info'),
                                                    'icon' => 'ti-info-alt',
                                                    'target' => '_blank',
                                                    'can'=>'grade-info'
                                                ],
                                            ]" />
                                        </td>
                                    </tr>
                                    @include('backend.Grades.edit')
                                @endforeach
                            </tbody>
                        </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')

    @endpush
@endsection
