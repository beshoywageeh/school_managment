@extends('layouts.app')
@section('title')
    {{ trans('report.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="mb-40 row">
        @php
            $reports_links = [
                trans('Sidebar.Students') => [
                    [
                        'Name' => trans('report.student_info'),
                        'Url' => route('reports.export_student'),
                        'type' => 'link',
                    ],
                    [
                        'Name' => trans('report.tammen'),
                        'Url' => route('reports.export_student'),
                        'type' => 'link',
                    ],
                    [
                        'Name' => trans('report.report_type', ['type' => 41]),
                        'Url' => route('report.student_report', ['type' => 41]),
                        'type' => 'link',
                    ],
                ],
                trans('Sidebar.stores') => [
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
                    [
                        'Name' => trans('report.clothes_stock'),
                        'Url' => route('reports.clothes_stock'),
                        'type' => 'link',
                    ],
                    [
                        'Name' => trans('report.clothe_stock'),
                        'Url' => '#clothes_stock',
                        'type' => 'button',
                    ],
                    [
                        'Name' => trans('report.books_sheets_stocks'),
                        'Url' => route('report.books_sheets'),
                        'type' => 'link',
                    ],
                    [
                        'Name' => trans('report.book_sheet_stock'),
                        'Url' => '#book_sheet_stock',
                        'type' => 'button',
                    ],
                ],
                trans('Sidebar.accounting') => [
                    [
                        'Name' => trans('Sidebar.schoolfees'),
                        'Url' => '1',
                        'type' => 'link',
                    ],
                    [
                        'Name' => trans('Sidebar.fees_invoice'),
                        'Url' => '#fees_invoices',
                        'type' => 'button',
                    ],
                    [
                        'Name' => trans('Sidebar.Recipt_Payment'),
                        'Url' => '1',
                        'type' => 'link',
                    ],
                    [
                        'Name' => trans('Sidebar.payment_parts'),
                        'Url' => '1',
                        'type' => 'link',
                    ],
                    [
                        'Name' => trans('Sidebar.credit'),
                        'Url' => '1',
                        'type' => 'button',
                    ],
                    [
                        'Name' => trans('Sidebar.except_fee'),
                        'Url' => '#exception_fee',
                        'type' => 'button',
                    ],
                    [
                        'Name' => trans('General.payment_status'),
                        'Url' => '#payment_status',
                        'type' => 'button',
                    ],
                ],
            ];
        @endphp
        @foreach ($reports_links as $heading => $report_links)
            <div class="col">
                <div class="mb-4 card h-100">
                    <div class="text-center card-header">
                        <h4><strong>{{ trans('report.title') }} | {{ $heading }}</strong></h4>
                    </div>
                    <div class="card-body">

                        <ul class="list-unstyled">

                            @foreach ($report_links as $acc_link)
                                <li class="">
                                    <div class="media">
                                        <div class="text-center media-body">
                                            @if ($acc_link['type'] == 'link')
                                                <a class="btn btn-block btn-light" target="_blank"
                                                    href="{{ $acc_link['Url'] }}">
                                                    <h5 class="">
                                                        <strong>{{ $acc_link['Name'] }}</strong>
                                                    </h5>
                                                </a>
                                            @endif
                                            @if ($acc_link['type'] == 'button')
                                                <button class="btn btn-block btn-light" data-toggle="modal"
                                                    data-target="{{ $acc_link['Url'] }}">
                                                    <h5><strong>{{ $acc_link['Name'] }}</strong></h5>
                                                </button>
                                            @endif

                                        </div>
                                    </div>

                                </li>
                                @if (!$loop->last)
                                    <div class="mt-20 mb-20 divider dotted"></div>
                                @endif
                            @endforeach

                        </ul>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @include('backend.report.popup.daily_fee_popup')
    @include('backend.report.popup.exception_popup')
    @include('backend.report.popup.stock_popup')
    @include('backend.report.popup.clothes_popup')
    @include('backend.report.popup.book_sheet_popup')
    @include('backend.report.popup.payment_status')
    @include('backend.report.popup.fees_invoices_popup')
    @push('scripts')
    @endpush
@endsection
