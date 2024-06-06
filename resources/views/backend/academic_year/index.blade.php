@extends('layouts.app')
@section('title')
    {{ trans('academic_year.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card">
                <div class="card-body">
                    @can('academic_year-create')
                    <form action="{{ route('academic_year.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group date" id="datepicker-action">
                                    {{trans('academic_year.year_end')}}
                                    <input class="form-control" name="year_end" type="text" value="dd/mm/yyyy">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="checkbox checbox-switch switch-info">
                                        <label>
                                            {{ trans('academic_year.status') }}
                                            <input type="checkbox" name="status">
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="button btn-block">{{ trans('general.Submit') }}</button>
                            </div>
                        </div>
                    </form>
                    @endcan

                </div>
            </div>
        </div>
    </div>


@can('academic_year-list')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-satistics h-100">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('academic_year.year_start') }}</th>
                                    <th>{{ trans('academic_year.year_end') }}</th>
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
                                            <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'url' => route('academic_year.edit', $acadmice_year->id),
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil-alt',
                                                    'can'=>'academic_year-edit'

                                                ],
                                                [
                                                    'url' => route('academic_year.edit', $acadmice_year->id),
                                                    'text' => trans('academic_year.change_status'),
                                                    'icon' => 'ti-reload',
                                                    'can'=>'academic_year-status'
                                                ],
                                                [
                                                    'url' => route('academic_year.destroy', $acadmice_year->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can'=>'academic_year-delete',
                                                ],
                                                [
                                                    'url' => route('academic_year.show', $acadmice_year->id),
                                                    'text' => trans('general.info'),
                                                    'icon' => 'ti-info-alt',
                                                    'target' =>'_blank',
                                                    'can'=>'academic_year-ingo'
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
