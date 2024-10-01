@extends('layouts.app')
@section('title')
    {{ trans('PaymentParts.title') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h4>{{ trans('PaymentParts.title') }}</h4>
                            </div>
                            <div class="col text-md-right">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('payment_parts-list')
                            <table id="datatable" class="table text-center table-sm table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('general.created_at') }}</th>
                                        <th>{{ trans('Recipt_Payments.name') }}</th>
                                        <th>{{ trans('PaymentParts.status') }}</th>
                                        <th>{{ trans('Recipt_Payments.amount') }}</th>
                                        <th>{{ trans('general.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($PaymentParts as $PaymentPart)
                                        <tr>
                                            <td> {{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($PaymentPart->date)->format('Y-m-d') }}</td>
                                            <td><a target='_blank'
                                                    href="{{ route('payment_parts.show', $PaymentPart->students->id) }}">{{ $PaymentPart->students->name }}</a>
                                            </td>
                                            <td>
                                                @can('payment_parts-status')
                                                    <a class="btn {{ $PaymentPart->payment_status->color() }} btn-sm"
                                                        href="{{ route('payment_parts.pay', $PaymentPart->id) }}">
                                                        {{ $PaymentPart->payment_status->lang() }}
                                                        <img src="{{ asset('assests/images/load.gif') }}" alt=""> </a>
                                                @endcan
                                            </td>
                                            <td>{{ number_format($PaymentPart->amount, 2) }}&nbsp;ج.م</td>
                                            <td>
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'url' => route('payment_parts.show', $PaymentPart->id),
                                                        'text' => trans('general.info'),
                                                        'icon' => 'ti-info-alt',
                                                        'target' => '_blank',
                                                        'can' => 'payment_parts-info',
                                                    ],
                                                    [
                                                        'url' => route('payment_parts.destroy', $PaymentPart->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'payment_parts-delete',
                                                    ],
                                                    [
                                                        'url' => route('payment_parts.edit', $PaymentPart->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'payment_parts-edit',
                                                    ],
                                                    [
                                                        'url' => route('payment_parts.pay', $PaymentPart->id),
                                                        'text' => trans('general.pay'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'payment_parts-pay',
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
