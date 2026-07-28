@extends('layouts.pdf', ['school' => $school])

@section('page-header')
@endsection

@section('content')
    @foreach ($data['exp'] as $key => $students)
        <div style="height: 5px; width: 95%; margin: auto; margin-bottom:5px;">
            <div style="font-size: 15px; font-weight:bold; margin-top:50px;border-bottom:2px solid black">
                <table class="data-table" style="width:100%">
                    <tr>
                        <td class="text-center" width="25%">
                            {{ $school->heading_right }}
                        </td>
                        <td class="text-center" width="50%">
                            {{ trans('report.acc_year', ['aa' => $data['acc_year']->view]) }}
                            <br>
                            <br>
                            {{ trans('report.payment', ['grade' => $key]) }}

                        </td>
                        <td class="text-left">
                            @if ($school->image == null)
                                <img class="img-fluid" style="max-width:10%"
                                    src="{{ asset('assests/images/loop_labs.png') }}"
                                    alt="{{ $school->name }}">
                            @else
                                <img class="img-fluid" style="max-width:10%"
                                    src="{{ storage_path('app/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                                    alt="{{ $school->name }}">
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <table class="table text-center table-striped table-bordered table-sm">
            <thead>

                <tr class="text-white bg-dark">
                    <th>#</th>
                    <th>{{ trans('report.student') }}</th>
                    <th>{{ trans('report.note') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td width="5%">{{ $loop->index + 1 }}</td>
                        <td>{{ $student->student->name }}</td>
                        <td>{{ $student->note }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (!$loop->last)
            <pagebreak></pagebreak>
        @endif
    @endforeach
@endsection
