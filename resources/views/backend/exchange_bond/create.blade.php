@extends('layouts.app')
@section('title')
    {{ trans('exchange_bonds.create') }}
@endsection
@push('css')
@endpush
@section('content')
    @can('exchange_bonds-list')
        <div class="row">
            <div class="col-xl-12 mb-30">
                <div class="card card-satistics h-100">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="row">
                                <div class="col"></div>
                                <div class="text-right col">
                                    @can('exchange_bonds-create')
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Create_Year">
                                            {{ trans('General.new') }}
                                        </button>
                                    @endcan
                                </div>
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-sm" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('exchange_bonds.manual') }}</th>
                                        <th>{{ trans('exchange_bonds.acc_year') }}</th>
                                        <th>{{ trans('exchange_bonds.student') }}</th>
                                        <th>{{ trans('exchange_bonds.amount') }}</th>
                                        <th>{{ trans('exchange_bonds.description') }}</th>
                                        <th>{{ trans('general.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($exchanges as $exchange)
                                        <tr>
                                            <td> {{ $loop->index +1 }}</td>
                                            <td> {{ $exchange->manual ?? '-' }}</td>
                                            <td>{{ $exchange->acadmic_year->view }}</td>
                                            <td>{{ $exchange->student->name }}</td>
                                            <td>{{ Number::currency($exchange->amount,'EGP') }}</td>
                                            <td>{{ $exchange->description }}</td>
                                            <td></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">{{ trans('general.Msg') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
    @endcan

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
@endsection
