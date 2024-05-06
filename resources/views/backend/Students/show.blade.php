@extends('layouts.app')
@section('title')
{{trans('parents.show')}} | {{ $parent->Father_Name }}
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="flex justify-between mb-4">
            <h4 class="card-title">{{ $parent->Father_Name }}</h4>
        </div>
        @include('backend.msg')
        <div class="mb-4 table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>{{ trans('Parents.Father_Name') }}</th>
                    <td>{{ $parent->Father_Name }}</td>
                    <th>{{ trans('Parents.Father_Phone') }}</th>
                    <td>{{ $parent->Father_Phone }}</td>
                </tr>
                <tr>
                    <th>{{ trans('Parents.Mother_Name') }}</th>
                    <td>{{ $parent->Mother_Name }}</td>
                    <th>{{ trans('Parents.Mother_Phone') }}</th>
                    <td>{{ $parent->Mother_Phone }}</td>
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
                @foreach ($parent->students as $student )
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->birth_date}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->grade->Grade_Name}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@push('scripts')

@endpush
@endsection