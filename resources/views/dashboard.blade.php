@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.Dashboard') }}
@endsection
@push('css')
    <style>
        #statisces {
            font-size: x-large;
            font-weight: bold;
        }
    </style>
@endpush
@section('content')
    <div class="row"style="height: 35vh !important">
        <div class="mb-4 col-md-4">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @php
                        $statisces = [
                            [
                                'title' => 'Sidebar.Students',
                                'icon' => URL::asset('assests/images/Sidebar/students.png'),
                                'data_var' => $students,
                                'route'=>route('Students.index'),
                            ],
                            [
                                'title' => 'Sidebar.parents',
                                'icon' => URL::asset('assests/images/Sidebar/parents.png'),
                                'data_var' => $parents,
                                'route'=>route('parents.index'),
                            ],
                        ];
                    @endphp
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered" id="statisces">
                            @foreach ($statisces as $statisce)
                                <tr>
                                    <td><img class="img img-responisve" width="30" height="30" src="{{$statisce['icon']}}" alt=""></td>
                                    <td><a href="{{$statisce['route']}}">{{trans($statisce['title'])}}</a></td>
                                    <td>{{ $statisce['data_var'] }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 col-md-4">
        </div>
        <div class="mb-4 col-md-4">
            @php
                $quickAccess = [
                    [
                        'route' => 'Students.create',
                        'name' => 'student.title',
                        'can' => 'Students-create',
                    ],
                    [
                        'route' => 'parents.create',
                        'name' => 'parents.title',
                        'can' => 'parents-create',
                    ],
                    [
                        'route' => 'employees.create',
                        'name' => 'employees.title',
                        'can' => 'employees-create',
                    ],
                    [
                        'route' => 'schoolfees.create',
                        'name' => 'fees.title',
                        'can' => 'schoolfees-create',
                    ],
                ];
            @endphp
            <div class="text-center card card-statistics h-100">
                <div class="card-body">
                    <ul class="list-unstyled">
                        @foreach ($quickAccess as $link)
                            @can($link['can'])
                                <li>
                                    <a href="{{ route($link['route']) }}" class="btn btn-success btn-block">
                                        <strong>{{ trans($link['name']) . ' ' . trans('General.new') }}</strong></a>
                                </li>
                            @endcan
                            @if (!$loop->last)
                                <hr>
                            @endif
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="mb-40 row" style="height: 35vh !important">
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
                                                @if (is_numeric($payment_parts->amount))
                                                    {{ Number::currency($payment_part->amount, 'EGP', 'AR') }}
                                            </span>
                                        @else
                                            {{ $payment_parts->amount }}
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
                                            @if (is_numeric($payment->debit))
                                                {{ Number::currency($payment->debit, 'EGP', 'AR') }}
                                            @else
                                                {{ $payment->debit }}
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
