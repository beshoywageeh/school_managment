@extends('layouts.app')
@section('title')
    {{trans('parents.title')}}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('parents.title') }}</h4>
                        </div>
                        <div class="col text-md-right">
                            @can('parents-create')
                                <a href="{{route('parents.create')}}"
                                   class="btn btn-success">
                                    <i class="ti-plus"></i>
                                    {{ trans('parents.new') }}
                                </a>
                            @endcan
                            @can('employees-import_Excel')
                                <button type="button"
                                        class="btn btn-primary"
                                        data-target="#Import_Excel"
                                        data-toggle="modal"><i class="ti-upload"></i>
                                    {{ trans('general.Import_Excel') }}</button>
                                @include('backend.parents.import')
                            @endcan
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('parents-list')
                            <table class="table table-striped table-bordered"
                                   id="datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('Parents.Father_Name') }}</th>
                                    <th>{{ trans('Parents.Father_Phone') }}</th>
                                    <th>{{ trans('Parents.Mother_Name') }}</th>
                                    <th>{{ trans('Parents.Mother_Phone') }}</th>
                                    <th>{{ trans('Parents.Address') }}</th>
                                    <th>{{ trans('General.actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($parents as $parent)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td>{{ $parent->Father_Name }}</td>
                                        <td>{{ $parent->Father_Phone }}</td>
                                        <td>{{ $parent->Mother_Name }}</td>
                                        <td>{{ $parent->Mother_Phone }}</td>
                                        <td>{{ $parent->Address }}</td>

                                        <td>
                                            <x-dropdown-table :buttonText="trans('general.actions')"
                                                              :items="[
                                        [
                                            'url' => route('parents.destroy', $parent->id),
                                            'text' => trans('general.delete'),
                                            'icon' => 'ti-trash',
                                            'onclick' => 'confirmation(event)',
                                            'can'=>'parents-delete'
                                        ],
                                        [
                                            'url' => route('parent.show', $parent->id),
                                            'text' => trans('general.info'),
                                            'icon' => 'ti-info-alt',
                                            'target' => '_blank',
                                            'can'=>'parents-info'
                                        ],
                                        [
                                            'url' => route('parents.edit', $parent->id),
                                            'text' => trans('general.edit'),
                                            'icon' => 'ti-pencil',
                                            'can' => 'parents-edit',

                                        ],
                                    ]"/>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger"
                                         role="alert">
                                        <p>{{ trans('general.Msg') }}</p>
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
