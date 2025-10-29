@extends('layouts.app')
@section('title')
    {{ trans('classes.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col-lg">
                            <h4>{{ trans('classes.title') }}</h4>
                        </div>
                        <div class="col-lg text-md-right">
                            @can('classes-create')
                                <x-button type="" data-toggle="modal" data-target="#Createclasses" class="primary">
                                    <i class="ti-plus"></i>
                                    {{ trans('class_rooms.new') }}
                                </x-button>
                                @include('backend.classes.create')
                            @endcan
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('classes-list')
                            <table class="table table-striped table-bordered table-sm" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('classes.name') }}</th>
                                        <th>{{ trans('classes.grades') }}</th>
                                        <th>{{ trans('classes.classroom') }}</th>
                                        <th>{{ trans('class_rooms.Student_Count') }}</th>
                                        <th>{{ trans('general.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($classes as $class)
                                        <tr>
                                            <td> {{ $loop->iteration }}</td>
                                            <td><a href={{route('classes.show',$class)}}>{{ $class->title }}</a>
                                                 &nbsp; {{ $class->tammen() }}</td>
                                            <td> {{ $class->grade->name }}</td>
                                            <td>{{ $class->class_room->name }}</td>
                                            <td>{{ $class->students_count }}</td>
                                            <td>
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('classes.show', $class->id),
                                                        'text' => trans('general.info'),
                                                        'icon' => 'ti-info',
                                                        'can' => 'classes-addstudent',
                                                    ], [
                                                        'type' => 'link',
                                                        'url' => route('classes.add_students', $class),
                                                        'text' => trans('classes.add_Students'),
                                                        'icon' => 'ti-plus',
                                                        'can' => 'classes-addstudent',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('classes.destroy', $class->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'classes-delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('classes.tammen', $class),
                                                        'text' => trans('classes.tammen'),
                                                        'icon' => '',
                                                        'can' => 'classes-tammen',
                                                    ],
                                                    [
                                                        'type' => 'button',
                                                        'target' => '#class-edit-' . $class->id,
                                                        'text' => trans('General.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'classes-update',
                                                    ],
                                                ]" />
                                            </td>
                                        </tr>
                                        @include('backend.classes.edit')
                                    @empty
                                        <tr>
                                            <td colspan="6">{{ trans('general.noDataToShow') }}</td>
                                        </tr>
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
