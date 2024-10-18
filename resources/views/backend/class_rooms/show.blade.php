@extends('layouts.app')
@section('title')
{{trans('class_rooms.title')}} - {{ $data['class_room']->name }}
@endsection
@push('css')
<style>
    @media print {
        #print_Button {
            display: none;
        }
    }
</style>
@endpush
@section('content')
<div class="mb-4 row">
    <div class="col">
        <div class="card" id="print">
            <div class="card-body">
                <div class="row card-title">
                    <div class="col">
                        <h4>{{ $data['class_room']->name }}</h4>
                    </div>
                    <div class="col text-md-right">
                        <x-button id="print_Button" class="primary" type="" onclick="printDiv()">
                            <i class="ti-print"></i>
                            {{ trans('general.print') }}
                        </x-button>
                    </div>
                </div>
                <div class="table-resposive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('student.name') }}</th>
                                <th>{{ trans('student.birth_date') }}</th>
                                <th>{{ trans('student.gender') }}</th>
                                <th>{{trans('student.religion')}}</th>
                                <th>{{ trans('general.created_by') }}</th>
                                <th>{{ trans('general.created_at') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['class_room']->students as $student)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->birth_date}}</td>
                                <td>{{$student->gender->lang()}}</td>
                                <td>{{$student->religion->lang()}}</td>
                                <td>{{$student->user->name}}</td>
                                <td>{{is_null($student->created_at)?'-':$student->created_at->format('Y-m-d')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@push('scripts')


@endpush
@endsection
