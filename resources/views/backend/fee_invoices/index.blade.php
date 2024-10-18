@extends('layouts.app')
@section('title')
    {{ trans('fee_invoice.title') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h4>{{ trans('fee_invoice.title') }}</h4>
                            </div>
                            <div class="col text-md-right">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('fee_invoice-list')
                            <table id="datatable" class="table text-center table-striped table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('fee_invoice.date') }}</th>
                                        <th>{{ trans('fee_invoice.name') }}</th>
                                        <th>{{ trans('General.created_at') }}</th>
                                        <th>{{ trans('fee_invoice.debit') }}</th>
                                        <th>{{ trans('fee_invoice.grade') }}</th>
                                        <th>{{ trans('fee_invoice.class') }}</th>
                                        <th>{{ trans('fee_invoice.acadmic') }}</th>
                                        <th>{{ trans('general.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fee_invoices as $fee_invoice)
                                        <tr>
                                            <td> {{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($fee_invoice->invoice_date)->format('Y-m-d') }}</td>
                                            <td><a target='_blank'
                                                    href="{{ route('Students.show', $fee_invoice->student_id) }}">{{ $fee_invoice->students->name }}</a>
                                            </td>
                                            <td>{{ $fee_invoice->created_at->format('Y-m-d') }}</td>
                                            <td>{{ number_format($fee_invoice->fees_sum_amount, 2) }}&nbsp;ج.م</td>
                                            <td>{{ $fee_invoice->grades->name }}</td>
                                            <td>{{ $fee_invoice->classes->name }}</td>
                                            <td>{{ $fee_invoice->acd_year->view }}</td>
                                            <td>

                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('fee_invoice.destroy', $fee_invoice->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'fee_invoice-delete',
                                                    ],
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('fee_invoice.show', $fee_invoice->id),
                                                        'text' => trans('general.info'),
                                                        'icon' => 'ti-info-alt',
                                                        'target' => '_blank',
                                                        'can' => 'fee_invoice-info',
                                                    ],
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('fee_invoice.edit', $fee_invoice->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'target' => '_blank',
                                                        'can' => 'fee_invoice-edit',
                                                    ],
                                                ]" />
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
    @endpush
@endsection
