@extends('layouts.report_view')
@section('title')
    {{ trans('report.report_type', ['type' => 41]) }}
@endsection
@push('css')
    <style>
        @page {
            size: A4 Portrait;
            margin: 0;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            @forelse ($students as $key=>$stds)
                <div class="row">
                    <div class="col">
                        <h6 class="text-center">{{ $key }}</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered" id="content">
                        <thead>
                            <tr class="">
                                <th rowspan="2"><strong>#</strong></th>
                                <th rowspan="2"><strong>{{ trans('student.name') }}</strong></th>
                                <th rowspan="2"><strong>{{ trans('student.gender') }}</strong></th>
                                <th rowspan="2"><strong>{{ trans('general.religion') }}</strong></th>
                                <th rowspan="2"><strong>{{ trans('General.std_status') }}</strong></th>
                                <th rowspan="2"><strong>{{ trans('student.national_id') }}</strong></th>
                                <th rowspan="2"><strong>{{ trans('student.birth_date') }}</strong></th>
                                <th colspan="3"><strong>{{ trans('student.october') }}</strong></th>
                                <th rowspan="2"><strong>{{ trans('Parents.Father_Name') }}</strong></th>
                                <th rowspan="2"><strong>{{ trans('Parents.Address') }}</strong></th>
                            </tr>
                            <tr class="">
                                <th><strong>{{ trans('student.year') }}</strong></th>
                                <th><strong>{{ trans('student.month') }}</strong></th>
                                <th><strong>{{ trans('student.day') }}</strong></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stds as $stud)
                                @php
                                    $age = explode('-', $stud->birth_at_begin);
                                @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $stud->name }}</td>
                                    <td>{{ $stud->gender->lang() }}</td>
                                    <td>{{ $stud->religion == null ? ' - ' : $stud->religion->lang() }}</td>
                                    <td>{{ $stud->student_status->lang() }}</td>
                                    <td>{{ $stud->national_id }}</td>
                                    <td>{{ $stud->birth_date }}</td>
                                    <td>{{ $age[0] ?? '-' }}</td>
                                    <td>{{ $age[1] ?? '-' }}</td>
                                    <td>{{ $age[2] ?? '-' }}</td>
                                    <td>{{ $stud->parent->Father_Name }}</td>
                                    <td>{{ $stud->parent->Address }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @empty
                no data to show
            @endforelse
        </div>
    </div>
@endsection
