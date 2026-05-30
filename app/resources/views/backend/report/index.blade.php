@extends('layouts.app')
@section('title')
    {{ trans('report.title') }}
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        @php
            $reports_links = [
                trans('Sidebar.Students') => [
                    [
                        'Name' => trans('report.student_info'),
                        'Url' => 'backend.report.popup.students_popup',
                        'type' => 'button',
                        'can' => 'Students-list',
                    ],
                    [
                        'Name' => trans('report.tammen'),
                        'Url' => route('report.export_student'),
                        'type' => 'link',
                        'can' => 'Students-list',
                    ],
                    [
                        'Name' => trans('report.report_type', ['type' => 41]),
                        'Url' => 'backend.report.popup.incoming_students_popup',
                        'type' => 'button',
                        'can' => 'Students-list',
                    ],
                    [
                        'Name' => trans('report.student_tammen'),
                        'Url' => 'backend.report.popup.tammen_1_popup',
                        'type' => 'button',
                        'can' => 'Students-list',
                    ],
                ],
                trans('Sidebar.stores') => [
                    [
                        'Name' => trans('report.stock_product'),
                        'Url' => route('report.stock_product'),
                        'type' => 'link',
                        'can' => 'order-index',
                    ],
                    [
                        'Name' => trans('report.stock'),
                        'Url' => 'backend.report.popup.stock_popup',
                        'type' => 'button',
                        'can' => 'stocks-index',
                    ],
                    [
                        'Name' => trans('report.clothes_stock'),
                        'Url' => route('report.clothes_stock'),
                        'type' => 'link',
                        'can' => 'clothes-index',
                    ],
                    [
                        'Name' => trans('report.clothe_stock'),
                        'Url' => 'backend.report.popup.clothes_popup',
                        'type' => 'button',
                        'can' => 'clothes-index',
                    ],
                    [
                        'Name' => trans('report.books_sheets_stocks'),
                        'Url' => route('report.books_sheets'),
                        'type' => 'link',
                        'can' => 'books_sheets-index',
                    ],
                    [
                        'Name' => trans('report.book_sheet_stock'),
                        'Url' => 'backend.report.popup.book_sheet_popup',
                        'type' => 'button',
                        'can' => 'books_sheets-index',
                    ],
                ],
                trans('Sidebar.accounting') => [
                    [
                        'Name' => trans('Sidebar.schoolfees'),
                        'Url' => route('report.school_fees'),
                        'type' => 'link',
                        'can' => 'schoolfees-list',
                    ],
                    [
                        'Name' => trans('Sidebar.fees_invoice'),
                        'Url' => 'backend.report.popup.fees_invoices_popup',
                        'type' => 'button',
                        'can' => 'fee_invoice-list',
                    ],
                    [
                        'Name' => trans('Sidebar.Recipt_Payment'),
                        'Url' => 'backend.report.popup.payments_popup',
                        'type' => 'button',
                        'can' => 'Recipt_Payment-list',
                    ],
                    [
                        'Name' => trans('Sidebar.payment_parts'),
                        'Url' => 'backend.report.popup.payment_part_popup',
                        'type' => 'button',
                        'can' => 'payment_parts-list',
                    ],
                    [
                        'Name' => trans('Sidebar.credit'),
                        'Url' => 'backend.report.popup.credit_popup',
                        'type' => 'button',
                        'can' => 'Recipt_Payment-list',
                    ],
                    [
                        'Name' => trans('Sidebar.except_fee'),
                        'Url' => 'backend.report.popup.exception_popup',
                        'type' => 'button',
                        'can' => 'except_fee-list',
                    ],
                    [
                        'Name' => trans('general.payment_status'),
                        'Url' => 'backend.report.popup.payment_status_popup',
                        'type' => 'button',
                        'can' => 'fee_invoice-list',
                    ],
                    [
                        'Name' => trans('report.finalize_year'),
                        'Url' => 'backend.report.popup.final_year_popup',
                        'type' => 'button',
                        'can' => 'fee_invoice-list',
                    ],
                ],
                trans('Sidebar.employees') => [],
            ];

            $category_icons = [
                trans('Sidebar.Students') => 'fa-graduation-cap',
                trans('Sidebar.stores') => 'fa-store-alt',
                trans('Sidebar.accounting') => 'fa-calculator',
                trans('Sidebar.employees') => 'fa-graduation-cap',
            ];

            $category_gradients = [
                trans('Sidebar.Students') => 'from-blue-500 to-blue-600',
                trans('Sidebar.stores') => 'from-emerald-500 to-emerald-600',
                trans('Sidebar.accounting') => 'from-violet-500 to-violet-600',
                trans('Sidebar.employees') => 'from-blue-500 to-blue-600',
            ];
        @endphp

        @foreach ($reports_links as $heading => $report_links)
            @if (!empty($report_links))
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
                    <div class="bg-gradient-to-r {{ $category_gradients[$heading] ?? 'from-gray-500 to-gray-600' }} px-5 py-4">
                        <h4 class="text-white font-bold text-lg m-0">
                            <i class="fa {{ $category_icons[$heading] ?? 'fa-file-alt' }} ms-2"></i>
                            <strong>{{ $heading }}</strong>
                        </h4>
                    </div>
                    <div class="divide-y divide-gray-100">
                        @foreach ($report_links as $acc_link)
                            @can($acc_link['can'] ?? null)
                                <div class="flex items-center justify-between px-5 py-3.5 hover:bg-gray-50 transition-colors duration-200">
                                    <span class="font-semibold text-gray-800 text-sm">{{ $acc_link['Name'] }}</span>
                                    <div>
                                        @if ($acc_link['type'] == 'link')
                                            <a class="inline-flex items-center gap-1.5 px-3.5 py-2 text-sm font-medium text-blue-600 bg-blue-50 border border-blue-200 rounded-full hover:bg-blue-100 transition-colors" target="_blank" href="{{ $acc_link['Url'] }}">
                                                <x-hero-icon name="external-link" class="w-4 h-4" /> {{ trans('general.open') }}
                                            </a>
                                        @endif
                                        @if ($acc_link['type'] == 'button')
                                            @include($acc_link['Url'])
                                        @endif

                                    </div>
                                </div>
                            @endcan
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>

@endsection

