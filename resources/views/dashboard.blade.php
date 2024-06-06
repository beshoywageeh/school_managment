@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection

@section('content')
    <x-dashobard-card :item="[
        [
            'icon' => 'fa fa-users',
            'header' => trans('Sidebar.Students'),
            'data' => $students,
            'class' => 'bg-info'
        ],
        [
            'icon' => 'ti-money',
            'header' => trans('Sidebar.Recipt_Payment'),
            'data' => Number::currency($debit,'EGP','AR'),
            'class' => 'bg-success',
        ],
        [
            'icon' => 'ti-money',
            'header' => trans('Sidebar.credit'),
            'data' => Number::currency($credit,'EGP','AR'),
            'class' => 'bg-danger',
        ],
    ]" />
    <div class="mb-40 row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center card-title">
                        <h5>{{ trans('Sidebar.fast_method') }}</h5>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('Students.create') }}" class="btn btn-primary big-button w-100"> <img
                                    class="img-fluid" width="100" height="100"
                                    src="{{ asset('assests\images\sidebar\students.png') }}" /></a>

                        </div>
                        <div class="col">
                            <a href="{{ route('employees.create') }}" class="btn btn-primary big-button w-100"> <img
                                    class="img-fluid" width="100" height="100"
                                    src="{{ asset('assests\images\sidebar\employees.png') }}" /></a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('schoolfees.create') }}" class="btn btn-primary big-button w-100"> <img
                                    class="img-fluid" width="100" height="100"
                                    src="{{ asset('assests\images\sidebar\money.png') }}" /></a>

                        </div>
                        <div class="col">
                            <a href="{{ route('parents.create') }}" class="btn btn-primary big-button w-100"> <img
                                    class="img-fluid" width="100" height="100"
                                    src="{{ asset('assests\images\sidebar\parents.png') }}" /></a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
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
                                                {{ Number::currency($payment_part->amount,'EGP','AR') }}</span>
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
                                                {{ Number::currency($payment->Debit,'EGP','AR') }}</span>
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
