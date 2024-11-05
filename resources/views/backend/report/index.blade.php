@extends('layouts.app')
@section('title')
    {{ trans('report.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="mb-40 row">
        {{-- Students Report --}}
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="text-center col">
                            <h4>{{ trans('report.title') }} | {{ trans('Sidebar.Students') }}</h4>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        @php
                            $acc_links = [
                                [
                                    'Name' => trans('report.student_info'),
                                    'Url' => route('reports.export_student'),
                                ],
                                [
                                    'Name'=>trans('report.report_type',['type'=>41]),
                                    'Url'=>route('report.student_report',['type'=>41])
                                ],
                            ];
                        @endphp
                        @foreach ($acc_links as $acc_link)
                            <li class="">
                                <div class="media">
                                    <div class="text-center media-body">
                                        <a class="btn btn-block btn-light" target="_blank" href="{{ $acc_link['Url'] }}">
                                            <h5 class="">
                                                {{ $acc_link['Name'] }}</h5>
                                        </a>
                                    </div>
                                </div>

                            </li>
                            <div class="mt-20 mb-20 divider dotted"></div>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
        {{-- Teachers Report --}}
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="text-center col">
                            <h4>{{ trans('report.title') }} | {{ trans('Sidebar.Teacher') }}</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Inventory Report --}}
        <div class="col">
            <div class="mb-4 card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="text-center col">
                            <h4>{{ trans('report.title') }} | {{ trans('Sidebar.inventory') }}</h4>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        @php
                            $acc_links = [
                                [
                                    'Name' => trans('report.stock_product'),
                                    'Url' => route('reports.stock_product'),
                                    'type' => 'link',
                                ],
                                [
                                    'Name' => trans('report.stock'),
                                    'Url' => '#stock',
                                    'type' => 'button',
                                ],
                            ];
                        @endphp
                        @foreach ($acc_links as $acc_link)
                            <li class="">
                                <div class="media">
                                    <div class="text-center media-body">
                                        @if ($acc_link['type'] == 'link')
                                            <a class="btn btn-block btn-light" target="_blank"
                                                href="{{ $acc_link['Url'] }}">
                                                <h5 class="">
                                                    {{ $acc_link['Name'] }}</h5>
                                            </a>
                                        @endif
                                        @if ($acc_link['type'] == 'button')
                                            <button class="btn btn-block btn-light" data-toggle="modal"
                                                data-target="{{ $acc_link['Url'] }}"><h5>{{ $acc_link['Name'] }}</h5></button>
                                        @endif
                                    </div>
                                </div>

                            </li>
                            <div class="mt-20 mb-20 divider dotted"></div>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        {{-- Accounting Report --}}
        <div class="col">
            <div class="mb-4 card card-statistics h-100">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="text-center col">
                            <h4>{{ trans('report.title') }} | {{ trans('Sidebar.accounting') }}</h4>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        <button data-target="#daily_fee" data-toggle="modal" class="btn btn-block btn-light">
                            <h5>{{ trans('Sidebar.daily') }}</h5>
                        </button>
                        <hr>
                        <button data-target="#exception_fee" data-toggle="modal" class="btn btn-block btn-light">
                            <h5>{{ trans('Sidebar.except_fee') }}</h5>
                        </button>
                        <hr>
                        @php
                            $acc_links = [
                                [
                                    'Name' => trans('Sidebar.schoolfees'),
                                    'Url' => '1',
                                ],
                                [
                                    'Name' => trans('Sidebar.fees_invoice'),
                                    'Url' => '1',
                                ],
                                [
                                    'Name' => trans('Sidebar.Recipt_Payment'),
                                    'Url' => '1',
                                ],
                                [
                                    'Name' => trans('Sidebar.payment_parts'),
                                    'Url' => '1',
                                ],
                                [
                                    'Name' => trans('Sidebar.credit'),
                                    'Url' => '1',
                                ],
                            ];
                        @endphp
                        @foreach ($acc_links as $acc_link)
                            <li class="">
                                <div class="media">
                                    <div class="text-center media-body">
                                        <button class="btn btn-block btn-light" data-toggle="modal"
                                            data-target="{{ $acc_link['Url'] }}">
                                            <h5 class="">
                                                {{ $acc_link['Name'] }}</h5>
                                        </button>
                                    </div>
                                </div>

                            </li>
                            <div class="mt-20 mb-20 divider dotted"></div>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
    </div>
    @include('backend.report.daily_fee_popup')
    @include('backend.report.exception_popup')
    @include('backend.report.stock_popup')
    @push('scripts')
    @endpush
@endsection
