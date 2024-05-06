@extends('layouts.app')
@section('title')
{{trans('student.show')}} | {{ $student->name }}
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="flex justify-between mb-4">
            <h4 class="card-title">{{ $student->name }}</h4>
        </div>
        @include('backend.msg')
        <div class="mb-4 table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>{{ trans('parents.Father_Name') }}</th>
                    <td>{{ $student->parent->Father_Name }}</td>
                    <th>{{ trans('parents.Father_Phone') }}</th>
                    <td>{{ $student->parent->Father_Phone }}</td>
                </tr>
                <tr>
                    <th>{{ trans('parents.Mother_Name') }}</th>
                    <td>{{ $student->parent->Mother_Name }}</td>
                    <th>{{ trans('parents.Mother_Phone') }}</th>
                    <td>{{ $student->parent->Mother_Phone }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="mt-4 table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>{{trans('student.name')}}</th>
                    <th>{{trans('student.birth_date')}}</th>
                    <th>{{trans('student.gender')}}</th>
                    <th>{{trans('student.grade')}}</th>
                </tr>
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->birth_date}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->grade->Grade_Name}}</td>
                </tr>

            </table>
        </div>
    </div>
</div>

@push('scripts')

@endpush
@endsection
