@extends('layouts.app')
@section('title')
    {{ trans('fees.title') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('fees.title') }}</h4>
                        </div>
                        <div class="col text-md-right">
                            @can('schoolfees-list')
                                <a class="btn btn-success" href={{ route('schoolfees.create') }}>
                                    <i class="ti-plus"></i>
                                    {{ trans('general.new') }}
                                </a>
                            @endcan
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('schoolfees-list')
                            <table class="table table-striped table-bordered table-sm table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('fees.title') }}</th>
                                        <th>{{ trans('fees.grade') }}</th>
                                        <th>{{ trans('fees.classroom') }}</th>
                                        <th>{{ trans('academic_year.title') }}</th>
                                        <th>{{ trans('fees.desc') }}</th>
                                        <th>{{ trans('fees.amount') }}</th>
                                        <th>{{ trans('fees.by') }}</th>
                                        <th>{{ trans('general.created_at') }}</th>
                                        <th>{{ trans('general.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($School_Fees as $fee)
                                        <tr>
                                            <td> {{ $loop->index + 1 }}</td>
                                            <td>{{ $fee->title }}</td>
                                            <td>{{ $fee->grade->name }}</td>
                                            <td>{{ $fee->classroom->name }}</td>
                                            <td>{{ $fee->year->view }}</td>
                                            <td>{{ $fee->description }}</td>
                                            <td>{{ $fee->amount}}</td>
                                            <td>{{ $fee->user->name }}</td>
                                            <td>{{ $fee->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('schoolfees.destroy', $fee->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'schoolfees-delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('schoolfees.show', $fee->id),
                                                        'text' => trans('general.info'),
                                                        'icon' => 'ti-info-alt',
                                                        'target' => '_blank',
                                                        'can' => 'schoolfees-info',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('schoolfees.edit', $fee->id),
                                                        'text' => trans('general.edit'),
                                                        'icon' => 'ti-pencil',
                                                        'can' => 'schoolfees-edit',
                                                    ],
                                                ]" />
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-info" role="alert">
                                            <p>{{ trans('General.Msg') }}</p>
                                        </div>
                                    @endforelse
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
