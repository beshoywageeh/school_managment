@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{trans('Recipt_payments.title')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            @include('backend.msg')
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">

                        <div class="col">
                            <label for="">{{trans('Recipt_payments.man')}}</label>
                            <input type="text"
                                   class="form-control"
                                   disabled
                                   value="{{$invoice_manual}}">

                        </div>
                        <div class="col">
                            <label for="">{{trans('Recipt_payments.total')}}</label>
                            <input type="text"
                                   class="form-control"
                                   disabled
                                   value="{{Number::currency($Student->fees->sum('debit')-$Student->fees->sum('credit'),'EGP','AR')}}">

                        </div>
                    </div>


                    <div class="tab">
                        <ul class="nav nav-tabs"
                            role="tablist">
                            <li class="nav-item">
                                <a
                                    class="nav-link active show"
                                    id="home-tab"
                                    data-toggle="tab"
                                    href="#payment_invoice"
                                    role="tab"
                                    aria-controls="home"
                                    aria-selected="true"
                                >{{trans('Sidebar.fees_invoice')}}</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="profile-tab"
                                    data-toggle="tab"
                                    href="#payment_part"
                                    role="tab"
                                    aria-controls="profile"
                                    aria-selected="false"
                                >{{trans('Sidebar.payment_parts')}}</a
                                >
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div
                                class="tab-pane fade active show"
                                id="payment_invoice"
                                role="tabpanel"
                                aria-labelledby="home-tab"
                            >
                                <table class="table table-bordered table-sm">
                                    <tr>
                                        <th>{{trans('Recipt_payments.name')}}</th>
                                        <th>{{trans('general.created_at')}}</th>
                                        <th>{{trans('fees.desc')}}</th>
                                        <th>{{trans('Recipt_payments.amount')}}</th>
                                        <th></th>
                                    </tr>
                                    @forelse($feeInvoices as $feeInvoice)
                                        <form id="form-with-multiple-column" autocomplete="off"
                                              class="max-w-full"
                                              action="{{ route('Recipt_Payment.store') }}"
                                              method="post">

                                            @csrf
                                            <tr>
                                                <input type="hidden"
                                                       name="type"
                                                       value="full">
                                                <input type="hidden"
                                                       name="feeInvoice"
                                                       value="{{$feeInvoice->id}}">
                                                <td>
                                                    <select name="student_id"
                                                            class="custom-select">
                                                        <option value="{{$Student->id}}">{{$Student->name}}</option>
                                                    </select>
                                                </td>
                                                <td>{{$feeInvoice->invoice_date}}</td>
                                                <td>{{$feeInvoice->fees->title}}</td>
                                                <td>{{Number::currency($feeInvoice->fees->amount,'EGP','AR')}}</td>
                                                <td>
                                                    <button class="btn btn-success btn-sm"
                                                            type="submit">{{ trans('General.full_pay') }}</button>
                                                </td>
                                            </tr>

                                        </form>

                                    @empty
                                        <tr>
                                            <td colspan="5"
                                                class="alert alert-info">
                                                {{trans('general.noDataToShow')}}
                                            </td>

                                        </tr>
                                    @endforelse

                                </table>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="payment_part"
                                role="tabpanel"
                                aria-labelledby="profile-tab"
                            >
                                <table class="table table-bordered table-sm">
                                    <tr>
                                        <th>{{trans('Recipt_payments.name')}}</th>
                                        <th>{{trans('PaymentParts.date')}}</th>
                                        <th>{{trans('PaymentParts.amount')}}</th>
                                        <th>{{trans('PaymentParts.pay_part')}}</th>

                                        <th></th>
                                    </tr>
                                    @forelse($parts as $part)
                                        <form id="form-with-multiple-column" autocomplete="off"
                                              class="max-w-full"
                                              action="{{ route('payment_parts.submit_pay') }}"
                                              method="post">

                                            @csrf
                                            <tr>
                                                <input type="hidden"
                                                       name="type" value="full">
                                                <input type="hidden"
                                                       name="id" value="{{$part->id}}">
                                                <td>
                                                    <select name="student_id"
                                                            class="custom-select">
                                                        <option value="{{$Student->id}}">{{$Student->name}}</option>
                                                    </select>
                                                </td>
                                                <td>{{$part->date}}</td>
                                                <td>{{Number::currency($part->amount,'EGP','AR')}}</td>
                                                <td>
                                                    <input type="number"
                                                           name="amount"
                                                           id=""
                                                           class="form-control">
                                                </td>
                                                <td>
                                                    <button class="btn btn-success btn-sm"
                                                            type="submit">{{ trans('General.Submit') }}</button>
                                                </td>
                                            </tr>

                                        </form>

                                    @empty
                                        <tr>
                                            <td colspan="5" class="alert alert-info">
                                                {{trans('general.noDataToShow')}}
                                            </td>

                                        </tr>
                                    @endforelse

                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h4 class="bg-info text-center my-4 py-2 text-white">{{trans('Recipt_Payments.mini_report')}}</h4>
                            <table class="table table-active table-bordered table-sm">
                                <tr>
                                    <th>{{trans('Recipt_Payments.total_debit')}}</th>
                                    <th>{{trans('Recipt_Payments.total_credit')}}</th>
                                    <th>{{trans('Recipt_Payments.total_final')}}</th>
                                </tr>
                                <tr>
                                    <td>{{Number::currency($Student->fees->sum('debit'),'EGP','AR')}}</td>
                                    <td>{{Number::currency($Student->fees->sum('credit'),'EGP','AR')}}</td>
                                    <td>{{Number::currency($Student->fees->sum('debit')-$Student->fees->sum('credit'),'EGP','AR')}}</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    @endpush
@endsection
