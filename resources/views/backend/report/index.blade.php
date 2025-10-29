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
                        'can'=>'Students-list'
                    ],
                    [
                        'Name' => trans('report.tammen'),
                        'Url' => route('reports.export_student'),
                        'type' => 'link',
                        'can'=>'Students-list'
                    ],
                    [
                        'Name' => trans('report.report_type', ['type' => 41]),
                        'Url' => '#incoming_students',
                        'type' => 'button',
                        'can'=>'Students-list'
                    ], [
                        'Name' => trans('report.student_tammen'),
                        'Url' => '#tammen_1',
                        'type' => 'button',
                        'can'=>'Students-list'
                    ],
                ],
                trans('Sidebar.stores') => [
                    [
                        'Name' => trans('report.stock_product'),
                        'Url' => route('reports.stock_product'),
                        'type' => 'link',
                        'can'=>'order-index'
                    ],
                    [
                        'Name' => trans('report.stock'),
                        'Url' => '#stock',
                        'type' => 'button',
                        'can'=>'stocks-index'
                    ],
                    [
                        'Name' => trans('report.clothes_stock'),
                        'Url' => route('reports.clothes_stock'),
                        'type' => 'link',
                        'can'=>'clothes-index'
                    ],
                    [
                        'Name' => trans('report.clothe_stock'),
                        'Url' => '#clothes_stock',
                        'type' => 'button',
                        'can'=>"clothes-index"
                    ],
                    [
                        'Name' => trans('report.books_sheets_stocks'),
                        'Url' => route('report.books_sheets'),
                        'type' => 'link',
                        'can'=>'books_sheets-index'
                    ],
                    [
                        'Name' => trans('report.book_sheet_stock'),
                        'Url' => '#book_sheet_stock',
                        'type' => 'button',
                        'can'=>'books_sheets-index'
                    ],
                ],
                trans('Sidebar.accounting') => [
                    [
                        'Name' => trans('Sidebar.schoolfees'),
                        'Url' => route('report.school_fees'),
                        'type' => 'link',
                        'can'=>'schoolfees-list'
                    ],
                    [
                        'Name' => trans('Sidebar.fees_invoice'),
                        'Url' => '#fees_invoices',
                        'type' => 'button',
                        'can'=>'fee_invloice-list'
                    ],
                    [
                        'Name' => trans('Sidebar.Recipt_Payment'),
                        'Url' => '#payments',
                        'type' => 'button',
                        'can'=>'Recipt_Payment-list'
                    ],
                    [
                        'Name' => trans('Sidebar.payment_parts'),
                        'Url' => '#payment_parts',
                        'type' => 'button',
                        'can'=>'payment_parts-list'
                    ],
                    [
                        'Name' => trans('Sidebar.credit'),
                        'Url' => '#credit',
                        'type' => 'button',
                        'can'=>'Recipt_Payment-list'
                    ],
                    [
                        'Name' => trans('Sidebar.except_fee'),
                        'Url' => '#exception_fee',
                        'type' => 'button',
                        'can'=>'except_fee-list'
                    ],
                    [
                        'Name' => trans('general.payment_status'),
                        'Url' => '#payment_status',
                        'type' => 'button',
                        'can'=>'fee_invoice-list'
                    ],
                ],
                trans('Sidebar.employees')=>[]
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
                            @can($acc_link['can'])
                                <li class="">
                                    @if ($acc_link['type'] == 'link')
                                        <a class="anchor" target="_blank"href="{{ $acc_link['Url'] }}">
                                               {{ $acc_link['Name'] }}
                                        </a>
                                    @endif
                                    @if ($acc_link['type'] == 'button')
                                        <button class="anchor" data-toggle="modal"
                                            data-target="{{ $acc_link['Url'] }}">
                                           {{ $acc_link['Name'] }}
                                        </button>
                                    @endif

                                </li>
                                <hr>
                                @endcan
                            @endforeach

                        </ul>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @php
        $popups = [
            'exception_popup',
            'stock_popup',
            'clothes_popup',
            'book_sheet_popup',
            'payment_status_popup',
            'fees_invoices_popup',
            'incoming_students_popup',
            'tammen_1_popup',
            'payments_popup','payment_part_popup','credit_popup'
        ];
    @endphp
    @foreach ($popups as $popup)
        @include('backend.report.popup.' . $popup)
    @endforeach
    @push('scripts')
    @endpush
@endsection
