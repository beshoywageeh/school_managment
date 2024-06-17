@extends('layouts.app')
@section('title')
    {{ trans('class_rooms.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col-lg">
                            <h4>{{ trans('class_rooms.title') }}</h4>
                        </div>
                        <div class="col-lg text-md-right">
                            @can('class_rooms-create')
                            <x-button type="" data-toggle="modal" data-target="#CreateClassRoom" class="primary">
                            <i class="ti-plus"></i>
                            {{ trans('class_rooms.new') }}
                            </x-button>
                            @endcan
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('class_rooms-list')
                        <table class="table table-striped table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('class_rooms.Name') }}</th>
                                    <th>{{ trans('class_rooms.grades') }}</th>
                                    <th>{{ trans('class_rooms.Added_By') }}</th>
                                    <th>{{ trans('General.created_at') }}</th>
                                    <th>{{ trans('class_rooms.Student_Count') }}</th>
                                    <th>{{ trans('general.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['class_rooms'] as $class_room)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td><a target='_blank'
                                                href="{{ route('class_room.show', $class_room->id) }}">{{ $class_room->name }}</a>
                                        </td>
                                        <td> {{ $class_room->grade->name }}</td>
                                        <td>{{ $class_room->user->name }}</td>
                                        <td>{{ $class_room->created_at->format('Y/m/d') }}</td>
                                        <td>{{ $class_room->students_count }}</td>
                                        <td>
                                            @can('class_rooms-edit')
                                            <button class="btn btn-warning btn-sm" data-toggle="modal"
                                                                data-target="#class-edit-{{ $class_room->id }}">
                                                                <i class="ti-pencil-alt"></i>
                                                                {{ trans('general.edit') }}
                                                            </button>
                                                            @endcan
                                            <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'url' =>  route('class_rooms.destroy', $class_room->id) ,
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can'=>'class_rooms-delete'
                                                ],
                                                [
                                                    'url' =>  route('class_room.show', $class_room->id) ,
                                                    'text' => trans('general.info'),
                                                    'icon' => 'ti-info-alt',
                                                    'target' =>'_blank',
                                                    'can'=>'class_rooms-info'
                                                ],
                                            ]" />
                                        </td>
                                    </tr>
                                    @include('backend.class_rooms.edit')
                                @endforeach
                            </tbody>
                        </table>
                        @endcan
                    </div>
                </div>
            </div>
            @include('backend.class_rooms.Create')
        </div>

    </div>
    @push('scripts')

    @endpush
@endsection
