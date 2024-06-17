@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left icon-box bg-primary rounded-circle">
                  <span class="text-white">
                    <i class="fa fa-users highlight-icon"
                       aria-hidden="true"></i>
                  </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">{{ trans('Sidebar.Students') }}</p>
                            <h4>{{$students}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left icon-box bg-primary rounded-circle">
                  <span class="text-white">
                    <i class="ti-money highlight-icon"
                       aria-hidden="true"></i>
                  </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">{{ trans('Sidebar.Recipt_Payment') }}</p>
                            @if(is_numeric($debit))
                                <h4>{{Number::currency($debit,'EGP','AR')}}</h4>
                            @else
                                {{$debit}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left icon-box bg-primary rounded-circle">
                  <span class="text-white">
                    <i class="ti-money highlight-icon"
                       aria-hidden="true"></i>
                  </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">{{ trans('Sidebar.credit') }}</p>
                            @if(is_numeric($credit))
                                <h4>{{Number::currency($credit,'EGP','AR')}}</h4>
                            @else
                                {{$credit}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <a href="{{ route('Students.create') }}"
               class="btn btn-primary big-button w-100"> <img
                    class="img-fluid"
                    width="100"
                    height="100"
                    src="{{ asset('assests\images\sidebar\students.png') }}"/></a>

        </div>
        <div class="col">
            <a href="{{ route('employees.create') }}"
               class="btn btn-primary big-button w-100"> <img
                    class="img-fluid"
                    width="100"
                    height="100"
                    src="{{ asset('assests\images\sidebar\employees.png') }}"/></a>

        </div>
        <div class="col">
            <a href="{{ route('schoolfees.create') }}"
               class="btn btn-primary big-button w-100"> <img
                    class="img-fluid"
                    width="100"
                    height="100"
                    src="{{ asset('assests\images\sidebar\money.png') }}"/></a>

        </div>
        <div class="col">
            <a href="{{ route('parents.create') }}"
               class="btn btn-primary big-button w-100"> <img
                    class="img-fluid"
                    width="100"
                    height="100"
                    src="{{ asset('assests\images\sidebar\parents.png') }}"/></a>

        </div>
    </div>
    <div class="row mb-40">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5>{{ trans('Sidebar.payment_parts') }}</h5>
                    </div>
                    <ul class="list-unstyled">
                        @foreach ($payment_parts as $payment_part)
                            <li class="mb-20">
                                <div class="media">

                                    <div class="media-body">
                                        <h6 class="mt-0 mb-0">
                                            {{ $payment_part->students->name }}
                                            <span class="float-right text-danger">
                                               @if(is_numeric($payment_parts->amount))
                                                    {{ Number::currency($payment_part->amount,'EGP','AR') }}</span>

                                            @else
                                                {{$payment_parts->amount}}
                                            @endif
                                        </h6>
                                    </div>
                                </div>
                                <div class="mt-20 divider dotted"></div>
                            </li>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5>{{ trans('Sidebar.Recipt_Payment') }}</h5>
                    </div>
                    <ul class="list-unstyled">
                        @foreach ($payments as $payment)
                            <li class="mb-20">
                                <div class="media">

                                    <div class="media-body">
                                        <h6 class="mt-0 mb-0">
                                            {{ $payment->student->name }}
                                            <span class="float-right text-danger">
                                                   @if(is_numeric($payment->debit))
                                                    {{ Number::currency($payment->debit,'EGP','AR') }}

                                                @else
                                                    {{$payment->debit}}
                                                @endif
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="mt-20 divider dotted"></div>
                            </li>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
