@extends('layouts.app')
@section('title')
    {{ trans('sidebar.graduated') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        @can('Students-list')
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('student.name')}}</th>
                                    <th>{{trans('Grades.name')}}</th>
                                    <th>{{trans('class_rooms.Name')}}</th>
                                    <th>{{trans('student.grad_year')}}</th>
                                    <th>{{trans('general.actions')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($students as  $student)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->grade->name}}</td>
                                    <td>{{$student->classroom->name}}</td>
                                    <td>{{$student->deleted_at->format('Y')}}</td>
                                    <td>
                                        @can('Student-restore')
                                        <a class="btn btn-success" href="{{route('Students.restore',$student->id)}}"><i class="ti-reload"></i></a>
                                        @endcan
                                        @can('Students-delete')
                                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{route('Students.forceDelete',$student->id)}}"><i class="ti-trash"></i></a>
                                    @endcan
                                    </td>
                                </tr>
                            @empty
<tr>
    <th colspan="6">{{trans('General.noDataToShow')}}</th>
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
