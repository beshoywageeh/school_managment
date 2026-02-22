@extends('layouts.app')
@section('title')
    {{ trans('Grades.title') }}
@endsection
@section('content')
    @include('backend.Grades.create')
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
                            <table class="table p-0 text-center table-striped table-sm table-bordered">
                                <thead class="font-bold">
                                    <td>#</td>
                                    <td>{{ trans('Grades.name') }}</td>
                                    <td>{{ trans('Grades.by') }}</td>
                                    <td>{{ trans('general.created_at') }}</td>
                                    <td>{{ trans('Grades.class_count') }}</td>
                                    <td>{{ trans('Grades.student_count') }}</td>
                                    <td>{{ trans('general.actions') }}</td>
                                </thead>
                                <tbody>
                                    @forelse ($data['grades'] as $grade)
                                        <tr>
                                            <td> {{ $data['grades']->firstItem() + $loop->index }}</td>
                                            <td><a target='_blank'
                                                    href="{{ route('grade.show', $grade->id) }}">{{ $grade->name }}</a></td>
                                            <td>{{ $grade->user->name }}</td>
                                            <td>{{ $grade->created_at->format('Y/m/d') }}</td>
                                            <td>{{ $grade->class_rooms_count }}</td>
                                            <td>{{ $grade->students_count }}</td>

                                            <td>
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type'=>'button',
                                                        'target'=>'#grade-edit-'.$grade->id,
                                                        'text'=>trans('general.edit'),
                                                        'icon'=>'ti-pencil-alt',
                                                        'can'=>'grade-edit'
                                            ],
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('grade.destroy', $grade->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'grade-delete',
                                                    ],
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('grade.show', $grade->id),
                                                        'text' => trans('general.info'),
                                                        'icon' => 'ti-info-alt',
                                                        'target' => '_blank',
                                                        'can' => 'grade-info',
                                                    ],

                                                ]" />
                                            </td>
                                        </tr>
                                        @include('backend.Grades.edit')
                                        @empty
                                        <tr><td colspan="7">{{trans('general.noDataToShow')}}</td></tr>
                                    @endforelse
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
