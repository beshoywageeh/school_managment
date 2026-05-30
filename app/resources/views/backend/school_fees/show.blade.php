@extends('layouts.report_view')

@section('title')
    {{ trans('report.daily_fee') }}
@endsection

@section('content')
    <div class="receipt" id="print">
        <div class="pb-3 mb-3 row border-bottom">
            <div class="col-4">
                <div class="logo">
                    @if ($school->image)
                        <img src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                            alt="{{ $school->name }}" class="img-fluid">
                    @else
                        <img src="{{ asset('assests/images/logo-icon-dark.png') }}" alt="Ischool" class="img-fluid">
                    @endif
                </div>
            </div>
            <div class="text-center col-4">
                <h1 class="h3">{{ trans('report.fee_invoice') }}</h1>
                <p class="mb-0">{{ trans('report.print_date') }} | {{ date('Y-m-d') }}</p>
            </div>
            <div class="col-4">
                {{ $school->name }}<br>
                {!! $school->heading_right !!}
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-12">
                <h2 class="h4">{{ $school_fee->title }}: {{ Number::currency($school_fee->amount, 'EGP', 'ar') }}</h2>
            </div>
        </div>
        <div class="overflow-x-auto" id="data">
            <table class="w-full text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('student.code') }}</th>
                        <th>{{ trans('student.name') }}</th>
                        <th>{{ trans('student.class') }}</th>
                        <th>{{ trans('student.grade') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $student->code }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->classroom->name }}</td>
                            <td>{{ $student->grade->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">{{ trans('report.no_data_found') }}</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4">{{ trans('report.to_colcet') }}</th>
                        <th>{{ Number::currency($students->count() * $school_fee->amount, 'EGP', 'ar') }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
