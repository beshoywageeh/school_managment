@extends('layouts.app')
@section('title')
    {{ trans('Recipt_Payments.title') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h4>{{ trans('Recipt_Payments.title') }}</h4>
                            </div>
                            <div class="col text-md-right">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('Recipt_Payment-list')
                            <table id="datatable" class="table text-center table-sm table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('Recipt_Payments.maual') }}</th>
                                        <th>{{ trans('general.created_at') }}</th>
                                        <th>{{ trans('Recipt_Payments.name') }}</th>
                                        <th>{{ trans('Recipt_Payments.amount') }}</th>
                                        <th>{{ trans('general.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Recipt_Payments as $Recipt_Payment)
                                        <tr>
                                            <td> {{ $loop->iteration }}</td>
                                            <td> {{ $Recipt_Payment->manual }}</td>
                                            <td>{{ \Carbon\Carbon::parse($Recipt_Payment->date)->format('Y-m-d') }}</td>
                                            <td>
                                                @can('Recipt_Payment-info')
                                                    <a target='_blank'
                                                        href="{{ route('Recipt_Payment.show', $Recipt_Payment->student->id) }}">{{ $Recipt_Payment->student->name }}</a>
                                                @endcan
                                            </td>
                                            <td>{{ Number::currency($Recipt_Payment->Debit, 'EGP', 'ar') }}</td>

                                            <td>

                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('Recipt_Payment.destroy', $Recipt_Payment->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'Recipt_Payment-delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('Recipt_Payment.show', $Recipt_Payment->id),
                                                        'text' => trans('general.info'),
                                                        'icon' => 'ti-info-alt',
                                                        'target' => '_blank',
                                                        'can' => 'Recipt_Payment-info',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('Recipt_Payment.edit', $Recipt_Payment->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'Recipt_Payment-edit',
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
