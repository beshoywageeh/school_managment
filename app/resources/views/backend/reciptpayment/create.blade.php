@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('Recipt_Payments.title') }}
@endsection
@push('styles')
    <style>
        .active {
            background-color: none !important;
        }
    </style>
@endpush
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">

                        <div class="col">
                            <label for="">{{ trans('Recipt_Payments.man') }}</label>
                            <input type="text" class="form-control" disabled value="{{ $invoice_manual }}">

                        </div>
                        <div class="col">
                            <label>{{ trans('general.choose', ['value' => trans('Recipt_Payments.title')]) }}</label>
                                <select class="form-control" id="payment_type">
                                    <option selected value="">
                                        {{ trans('general.choose', ['value' => trans('Recipt_Payments.title')]) }}</option>
                                    <option value="fee_invoice">{{ trans('Sidebar.fees_invoice') }}</option>
                                    <option value="payment_parts">{{ trans('Sidebar.payment_parts') }}</option>
                                    <option value="clothes">{{ trans('Sidebar.clothes') }}</option>
                                    <option value="books">{{ trans('Sidebar.books') }}</option>
                                    <option value="pay_all">{{ trans('Sidebar.pay_all') }}</option>
                                </select>
                        </div>
                        <!-- Student Info -->
                        <div class="col">
                            <span class="d-block display-4 border-4"> {{ $Student->name }}</span>
                        </div>
                    </div>

                    <!-- Payment Info -->
                    <div class="block row">
                        <div class="col d-none" id="fee_invoice">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <th>{{ trans('general.created_at') }}</th>
                                    <th>{{ trans('fees.desc') }}</th>
                                    <th>{{ trans('Recipt_Payments.amount') }}</th>
                                    <th></th>
                                </tr>
                                @forelse($feeInvoices as $feeInvoice)
                                    <form id="form-with-multiple-column" autocomplete="off" class="max-w-full"
                                        action="{{ route('receipt-payment.store') }}" method="post">

                                        @csrf
                                        <tr>
                                            <input type="hidden" name="type" value="full">
                                            <input type="hidden" name="feeInvoice" value="{{ $feeInvoice->id }}">
                                            <input type="hidden" value="{{ $Student->id }}" name="student_id">

                                            <td>{{ $feeInvoice->invoice_date }}</td>
                                            <td>{{ $feeInvoice->fees->title }}</td>
                                            @php
                                                $get_fees = \App\Models\ExcptionFees::where('student_id', $Student->id)
                                                    ->where('fee_id', $feeInvoice->id)
                                                    ->first();
                                                if ($get_fees != null) {
                                                    $final = $feeInvoice->fees->amount - $get_fees->amount;
                                                } else {
                                                    $final = $feeInvoice->fees->amount;
                                                }
                                            @endphp
                                            <td>{{ $final }}</td>
                                            <td>
                                                <button class="btn btn-success btn-block"
                                                    type="submit">{{ trans('general.full_pay') }}</button>
                                            </td>
                                        </tr>

                                    </form>

                                @empty
                                    <tr>
                                        <td colspan="5" class="alert alert-info">
                                            {{ trans('general.noDataToShow') }}
                                        </td>

                                    </tr>
                                @endforelse

                            </table>
                        </div>
                        <div class="col d-none" id="payment_parts">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <th>{{ trans('PaymentParts.date') }}</th>
                                    <th>{{ trans('PaymentParts.amount') }}</th>
                                    <th>{{ trans('PaymentParts.pay_part') }}</th>
                                    <th></th>
                                </tr>
                                @forelse($parts as $part)
                                    <form id="form-with-multiple-column" autocomplete="off" class="max-w-full"
                                        action="{{ route('payment_parts.submit_pay') }}" method="post">

                                        @csrf
                                        <tr>
                                            <input type="hidden" name="type" value="full">
                                            <input type="hidden" name="id" value="{{ $part->id }}">
                                            <input type="hidden" value="{{ $Student->id }}" name="student_id">


                                            <td>{{ $part->date }}</td>
                                            <td>{{ $part->amount }}</td>
                                            <td>
                                                <input type="number" name="amount" id="" class="form-control"
                                                    value="{{ $part->amount }}">
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-block"
                                                    type="submit">{{ trans('general.Submit') }}</button>
                                            </td>
                                        </tr>

                                    </form>

                                @empty
                                    <tr>
                                        <td colspan="5" class="alert alert-info">
                                            {{ trans('general.noDataToShow') }}
                                        </td>

                                    </tr>
                                @endforelse

                            </table>
                        </div>
                        <div class="col d-none" id="clothes">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <th>{{ trans('general.date') }}</th>
                                    <th>{{ trans('fees.desc') }}</th>
                                    <th>{{ trans('Recipt_Payments.amount') }}</th>
                                    <th></th>
                                </tr>
                                @forelse($clothesOrders as $order)
                                    <form id="form-clothes-{{ $order->id }}" autocomplete="off" class="max-w-full"
                                        action="{{ route('receipt-payment.pay-clothes') }}" method="post">

                                        @csrf
                                        <tr>
                                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                                            <input type="hidden" value="{{ $Student->id }}" name="student_id">

                                            <td>{{ $order->date }}</td>
                                            <td>{{ trans('Sidebar.clothes') }} - {{ $order->auto_number }}</td>
                                            <td>
                                                @php
                                                    $totalAmount = $order->stocks->sum(function($stock) {
                                                        return $stock->pivot->quantity_out * $stock->sales_price;
                                                    });
                                                @endphp
                                                {{ $totalAmount }}
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-block"
                                                    type="submit">{{ trans('general.full_pay') }}</button>
                                            </td>
                                        </tr>

                                    </form>

                                @empty
                                    <tr>
                                        <td colspan="5" class="alert alert-info">
                                            {{ trans('general.noDataToShow') }}
                                        </td>

                                    </tr>
                                @endforelse

                            </table>
                        </div>
                        <div class="col d-none" id="books">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <th>{{ trans('general.date') }}</th>
                                    <th>{{ trans('fees.desc') }}</th>
                                    <th>{{ trans('Recipt_Payments.amount') }}</th>
                                    <th></th>
                                </tr>
                                @forelse($bookOrders as $order)
                                    <form id="form-books-{{ $order->id }}" autocomplete="off" class="max-w-full"
                                        action="{{ route('receipt-payment.pay-books') }}" method="post">

                                        @csrf
                                        <tr>
                                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                                            <input type="hidden" value="{{ $Student->id }}" name="student_id">

                                            <td>{{ $order->date }}</td>
                                            <td>{{ trans('Sidebar.books') }} - {{ $order->auto_number }}</td>
                                            <td>
                                                @php
                                                    $totalAmount = $order->stocks->sum(function($stock) {
                                                        return $stock->pivot->quantity_out * $stock->sales_price;
                                                    });
                                                @endphp
                                                {{ $totalAmount }}
                                            </td>
                                            <td>
                                                <button class="btn btn-success btn-block"
                                                    type="submit">{{ trans('general.full_pay') }}</button>
                                            </td>
                                        </tr>

                                    </form>

                                @empty
                                    <tr>
                                        <td colspan="5" class="alert alert-info">
                                            {{ trans('general.noDataToShow') }}
                                        </td>

                                    </tr>
                                @endforelse

                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="py-2 my-4 text-center text-white bg-info">{{ trans('Recipt_Payments.mini_report') }}
                            </h4>
                            <table class="table table-active table-bordered table-sm">
                                <tr>
                                    <th>{{ trans('Recipt_Payments.total_debit') }}</th>
                                    <th>{{ trans('Recipt_Payments.total_credit') }}</th>
                                    <th>{{ trans('Recipt_Payments.total_final') }}</th>
                                </tr>
                                <tr>
                                    <td>{{ $Student->fee_invoice->sum('debit') }}</td>
                                    <td>{{ $Student->fee_invoice->sum('credit') }}</td>
                                    <td>{{ $Student->fee_invoice->sum('debit') - $Student->fee_invoice->sum('credit') }}
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            let payment_type = document.querySelector("#payment_type"),
                fee_invoice_div = document.querySelector("#fee_invoice"),
                payment_parts_div = document.querySelector("#payment_parts"),
                clothes_div = document.querySelector("#clothes"),
                books_div = document.querySelector("#books"),
                pay_all_div = document.querySelector("#pay_all");
            payment_type.addEventListener('click', function() {
                if (payment_type.value === "fee_invoice") {
                    fee_invoice_div.classList.remove("d-none");
                    payment_parts_div.classList.add("d-none");
                    clothes_div.classList.add("d-none");
                    books_div.classList.add("d-none");
                    pay_all_div.classList.add("d-none");
                } else if (payment_type.value === "payment_parts") {
                    payment_parts_div.classList.remove("d-none");
                    fee_invoice_div.classList.add("d-none");
                    clothes_div.classList.add("d-none");
                    books_div.classList.add("d-none");
                    pay_all_div.classList.add("d-none");
                } else if (payment_type.value === "clothes") {
                    clothes_div.classList.remove("d-none");
                    fee_invoice_div.classList.add("d-none");
                    payment_parts_div.classList.add("d-none");
                    books_div.classList.add("d-none");
                    pay_all_div.classList.add("d-none");
                } else if (payment_type.value === "books") {
                    books_div.classList.remove("d-none");
                    fee_invoice_div.classList.add("d-none");
                    payment_parts_div.classList.add("d-none");
                    clothes_div.classList.add("d-none");
                    pay_all_div.classList.add("d-none");
                } else if (payment_type.value === "pay_all") {
                    pay_all_div.classList.remove("d-none");
                    payment_parts_div.classList.add("d-none");
                    fee_invoice_div.classList.add("d-none");
                    clothes_div.classList.add("d-none");
                    books_div.classList.add("d-none");
                } else {
                    fee_invoice_div.classList.add("d-none");
                    payment_parts_div.classList.add("d-none");
                    clothes_div.classList.add("d-none");
                    books_div.classList.add("d-none");
                    pay_all_div.classList.add("d-none");
                }
            });
        </script>
    @endpush
@endsection
