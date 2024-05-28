@extends('layouts.app')
@section('title')
    {{ trans('ExcptionFee.title') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h4>{{ trans('ExcptionFee.title') }}</h4>
                            </div>
                            <div class="col text-md-right">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table text-center table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('general.created_at') }}</th>
                                <th>{{ trans('Recipt_Payments.name') }}</th>
                                <th>{{ trans('Recipt_Payments.amount') }}</th>
                                <th>{{ trans('general.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($ExcptionFees as $ExcptionFee)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td>{{ \Carbon\Carbon::parse($ExcptionFee->date)->format('Y-m-d') }}</td>
                                    <td><a target='_blank'
                                           href="{{ route('except_fee.show', $ExcptionFee->students->id) }}">{{ $ExcptionFee->students->name }}</a>
                                    </td>
                                    <td>{{ number_format($ExcptionFee->amount, 2) }}&nbsp;ج.م</td>

                                    <td>

                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'url' => route('except_fee.destroy', $ExcptionFee->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                ],
                                                [
                                                    'url' => route('except_fee.show', $ExcptionFee->id),
                                                    'text' => trans('general.info'),
                                                    'icon' => 'ti-info-alt',
                                                    'target' => '_blank',
                                                ],
                                                [
                                            'url' => route('except_fee.edit', $ExcptionFee->id),
                                            'text' => trans('general.edit'),
                                            'icon' => 'ti-pencil',

                                        ],
                                                [
                                                    'url' => route('Recipt_Payment.print', $ExcptionFee->id),
                                                    'text' => trans('general.print'),
                                                    'icon' => 'ti-printer',
                                                    'target' => '_blank',
                                                ],
                                            ]"/>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
    @endpush
@endsection
