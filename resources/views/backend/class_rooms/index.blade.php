@extends('layouts.app')
@section('title')
{{trans('class_rooms.title')}}
@endsection
@push('css')
<script type="module" crossorigin src="{{URL::asset('assests/js/data-table-15c50b44.js')}}"></script>

@endpush
@section('content')
<div>
    <div class="card">
        <div class="card-body">
            <div class="flex justify-between mb-4">
                <h4 class="card-title">{{ trans('class_rooms.title') }}</h4>
                <x-button data-toggle="modal" data-target="#CreateClassRoom" class="primary">
                    <i class="w-4" data-feather="plus-square"></i>
                    {{ trans('class_rooms.new') }}
                </x-button>
            </div>
            <div class="table-resposive">
                <table class="table table-striped table-bordered" id="datatable-filter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('class_rooms.Name') }}</th>
                            <th>{{ trans('class_rooms.grades') }}</th>
                            <th>{{ trans('class_rooms.Added_By') }}</th>
                            <th>{{ trans('class_rooms.Add_date') }}</th>
                            <th>{{ trans('class_rooms.Student_Count') }}</th>
                            <th>{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['class_rooms'] as $class_room)
                        <tr>
<td> {{ $data['class_rooms']->firstItem()+$loop->index }}</td>
                            <td><a target='_blank'
                                    href="{{route('class_room.show',$class_room->id)}}">{{$class_room->class_name}}</a>
                            </td>
                            <td> {{ $class_room->grade->Grade_Name }}</td>
                            <td>{{ $class_room->user->first_name . ' ' . $class_room->user->second_name }}</td>
                            <td>{{ $class_room->created_at->format('Y/m/d') }}</td>
                            <td>{{ $class_room->students_count }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="items-center dropdown-toggle btn btn-primary btn-xs"><i class="w-4"
                                            data-feather="chevron-down"></i>
                                    </button>
                                    <div class="dropdown-content">
                                        <ul class="dropdown-list">
                                            <li class="dropdown-list-item">
                                                <button class="dropdown-link" data-toggle="modal"
                                                    data-target="#class-edit-{{$class_room->id}}">
                                                    <i class="w-4" data-feather="edit"></i>
                                                    {{ trans('general.edit') }}
                                                </button>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a href="{{ route('class_rooms.destroy', $class_room->id) }}"
                                                    class="dropdown-link" onclick="confirmation(event)"><i class="w-4"
                                                        data-feather="trash-2"></i>
                                                    {{ trans('general.delete') }}</a>
                                            </li>
                                            <li class="dropdown-list-item">
                                                <a target="_blank" href="{{route('class_room.show',$class_room->id)}}"
                                                    class="dropdown-link">
                                                    <i class="w-4" data-feather="info"></i>
                                                    {{ trans('general.info') }} </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('backend.class_rooms.edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$data['class_rooms']->links('components.Paginatortion')}}
        </div>
    </div>
    @include('backend.class_rooms.Create')
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</script>


@endpush
@endsection
