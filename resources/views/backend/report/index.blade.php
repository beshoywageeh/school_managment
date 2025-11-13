@extends('layouts.app')
@section('title')
    {{ trans('report.title') }}
@endsection

@push('css')
    <style>
        .report-card {
            transition: all 0.3s ease-in-out;
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .report-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.15);
        }

        .report-card .card-header {
            background: linear-gradient(90deg,rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
            color: #fff;
            border-bottom: none;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            padding: 1.25rem;
        }

        .report-card .card-header h4 {
            font-weight: 700;
            font-size: 1.4rem; /* Increased */
            margin: 0;
        }

        .report-item {
            padding: 1.25rem 1.5rem; /* Increased padding */
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.2s ease-in-out;
        }

        .report-item:last-child {
            border-bottom: none;
        }

        .report-item:hover {
            background-color: #f8f9fa;
        }

        .report-item-name {
            font-weight: 600; /* Bolder */
            font-size: 1rem; /* Increased */
            color: #212529;
        }

        .report-item .btn {
            font-size: 0.85rem; /* Increased */
            font-weight: 600;
            padding: 0.5rem 1.2rem; /* Increased */
        }
    </style>
@endpush

@section('content')
    <div class="row">
        @php
            $reports_links = [
                trans('Sidebar.Students') => [
                    [
                        'Name' => trans('report.student_info'),
                       'Url' => '#students',
                        'type' => 'button',
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
                        'can'=>'fee_invoice-list'
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

            $category_icons = [
                trans('Sidebar.Students') => 'fa-graduation-cap',
                trans('Sidebar.stores') => 'fa-store-alt',
                trans('Sidebar.accounting') => 'fa-calculator',
                trans('Sidebar.employees') => 'fa-graduation-cap',
            ];
        @endphp


        @foreach ($reports_links as $heading => $report_links)
            @if(!empty($report_links))
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card report-card h-100">
                        <div class="text-center card-header">
                            <h4><i class="fa {{ $category_icons[$heading] ?? 'fa-file-alt' }} mr-2"></i><strong>{{ $heading }}</strong></h4>
                        </div>
                        <div class="p-0 card-body">
                            @foreach ($report_links as $acc_link)
                                @can($acc_link['can'])
                                    <div class="report-item">
                                        <span class="report-item-name">{{ $acc_link['Name'] }}</span>
                                        <div>
                                            @if ($acc_link['type'] == 'link')
                                                <a class="btn btn-sm btn-outline-primary rounded-pill" target="_blank" href="{{ $acc_link['Url'] }}">
                                                    <i class="fa fa-external-link-square mr-1"></i> {{ trans('general.open') }}
                                                </a>
                                            @endif
                                            @if ($acc_link['type'] == 'button')
                                                <button class="btn btn-sm btn-outline-secondary rounded-pill" data-toggle="modal" data-target="{{ $acc_link['Url'] }}">
                                                    <i class="fa fa-cogs mr-1"></i> {{ trans('general.generate') }}
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                @endcan
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
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
            'payments_popup','payment_part_popup','credit_popup','students_popup'
        ];
    @endphp

    @foreach ($popups as $popup)
        @include('backend.report.popup.' . $popup)
    @endforeach
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.grades').on('change', function() {
                $('.classrooms').innerHTML = '<option>{{ trans('general.loading') }}</option>';
                let grade = $(this).val();
                if (grade) {
                    $.ajax({
                        url: "{{ URL::to('/ajax/get_classRooms') }}/" + grade,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('.classrooms').empty();
                            $('.classrooms').append(
                                '<option selected disabled>{{ trans('student.choose_classroom') }}</option>',
                                '<option value="0">{{ trans('general.all') }}</option>'

                            );
                            $.each(data, function(key, value) {
                                console.log(key);
                                console.log(value.name);
                                $('.classrooms').append(
                                    `<option value="${value.id}">${value.name}</option>`
                                );

                            });
                        },
                    });
                };
            });
        });
    </script>
@endpush
