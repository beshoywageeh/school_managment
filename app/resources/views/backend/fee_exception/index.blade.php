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
                        @can('except_fee-list')
                            <table id="datatable" class="table text-center table-sm table-striped table-bordered">
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
                                            <td>{{ Number::currency($ExcptionFee->amount, 'EGP', 'ar') }}</td>

                                            <td>

                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('except_fee.destroy', $ExcptionFee->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'except_fee-delete',
                                                    ],
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('except_fee.show', $ExcptionFee->students->id),
                                                        'text' => trans('general.info'),
                                                        'icon' => 'ti-info-alt',
                                                        'target' => '_blank',
                                                        'can' => 'except_fee-info',
                                                    ],
                                                    [
                                                        'type'=>'link',
                                                        'url' => route('except_fee.edit', $ExcptionFee->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'except_fee-edit',
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
