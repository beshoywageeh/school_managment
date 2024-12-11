@extends('layouts.app')
@section('title')
    {{ trans('General.info') }}
@endsection
@push('css')
<style>
    body {
        font-size: 0.875rem;
    }

    .table {
        border: 1px solid black !important;

        border-collapse: collapse;
    }

    .table td,
    .table th {
        border: 1px solid black !important;
        border-collapse: collapse;
    }



</style>
@endpush
@section('content')
    <div class="row">
        <div class="col">
            <div class="mb-4 card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">{{$class->title}}</div>
                        <div class="text-right col">
                            <button class="btn btn-primary" onclick="printDiv()">{{trans('general.print')}}</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                 <div class="table-responsive" id="print">
                    <table class="table">
                        <tr>
                            <th>{{$class->title}}</th>
                            <th>{{$class->grade->name}}</th>
                            <th>{{$class->class_room->name}}</th>
                        </tr>
                        </table>
                        <table class="table">
                        <tr>
                            <th>{{trans('student.name')}}</th>
                            <th>{{trans('student.gender')}}</th>
                            <th>{{trans('student.religion')}}</th>
                        </tr>
                        <tbody>
                            @foreach ($class->students as $student)
                                <tr>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->gender->lang()}}</td>
                                    <td>{{$student->religion->lang()}}</td>
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
