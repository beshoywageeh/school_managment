@extends('layouts.app')
@section('title')
    {{ trans('ExcptionFee.title') }} | {{ trans('general.show') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h4>{{ trans('ExcptionFee.title') }}</h4>
                            </div>
                            <div class="col text-md-right">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">

                        <table class="table text-center table-striped table-bordered">

                            <tr>
                                <th>#</th>
                                <th>{{ trans('general.created_at') }}</th>
                                <th>{{ trans('Recipt_Payments.name') }}</th>
                                <th>{{ trans('academic_year.title') }}</th>
                                <th>{{ trans('Grades.name') }}</th>
                                <th>{{ trans('class_rooms.title') }}</th>
                                <th>{{ trans('Recipt_Payments.amount') }}</th>
                            </tr>
                            @foreach ($excptionFees as $ExcptionFee)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td>{{ \Carbon\Carbon::parse($ExcptionFee->date)->format('Y-m-d') }}</td>
                                    <td>{{ $ExcptionFee->students->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($ExcptionFee->academic_year->year_start)->format('Y') . '-' . \Carbon\Carbon::parse($ExcptionFee->academic_year->year_end)->format('Y') }}
                                    </td>
                                    <td>{{ number_format($ExcptionFee->amount, 2) }}&nbsp;ج.م</td>
                                    <td>{{ $ExcptionFee->grade->name }}</td>
                                    <td>{{ $ExcptionFee->classroom->name }}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
