@extends('layouts.app')
@section('title')
    {{ trans('academic_year.title') }}
@endsection
@push('css')
@endpush
@section('content')
    @can('academic_year-list')
        <div class="row">
            <div class="col-xl-12 mb-30">
                <div class="card card-satistics h-100">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="row">
                                <div class="col"></div>
                                <div class="text-right col">
                                    @can('academic_year-create')
                                        @include('backend.academic_year.create')
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
                                        <th>{{ trans('academic_year.year_start') }}</th>
                                        <th>{{ trans('academic_year.year_end') }}</th>
                                        <th>{{ trans('academic_year.view') }}</th>
                                        <th>{{ trans('general.created_by') }}</th>
                                        <th>{{ trans('general.created_at') }}</th>
                                        <th>{{ trans('academic_year.status') }}</th>
                                        <th>{{ trans('general.updated_by') }}</th>
                                        <th>{{ trans('general.updated_at') }}</th>
                                        <th>{{ trans('general.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($acadmice_years as $acadmice_year)
                                        <tr>
                                            <td> {{ $acadmice_years->firstItem() + $loop->index }}</td>
                                            <td>{{ \Carbon\Carbon::parse($acadmice_year->year_start)->format('Y-m') }}</td>
                                            <td> {{ \Carbon\Carbon::parse($acadmice_year->year_end)->format('Y-m') }}</td>
                                            <td>{{ $acadmice_year->view }}</td>
                                            <td>{{ $acadmice_year->creator->name }}</td>
                                            <td>{{ $acadmice_year->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <span class="badge {{ $acadmice_year->status->color() }}">
                                                    {{ $acadmice_year->status->lang() }}
                                                </span>
                                            </td>

                                            <td>{{ $acadmice_year->updator ? $acadmice_year->updator->name : '' }}</td>
                                            <td>{{ $acadmice_year->updator ? $acadmice_year->updated_at->format('Y-m-d') : '' }}
                                            </td>

                                            <td>
                                                @include('backend.academic_year.edit')
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'button',
                                                        'target' => '#Edit_year-' . $acadmice_year->id,
                                                        'text' => trans('General.edit'),
                                                        'icon' => 'fa fa-edit',
                                                        'can' => 'academic_year-edit',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('academic_year.destroy', $acadmice_year->id),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'onclick' => 'confirmation(event)',
                                                        'can' => 'academic_year-delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('academic_year.show', $acadmice_year->id),
                                                        'text' => trans('general.info'),
                                                        'icon' => 'ti-info-alt',
                                                        'target' => '_blank',
                                                        'can' => 'academic_year-info',
                                                    ],
                                                ]" />


                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center">{{ trans('general.Msg') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $acadmice_years->links('components.Paginatortion') }}
                    </div>
                </div>
            </div>
        </div>
    @endcan

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
@endsection
