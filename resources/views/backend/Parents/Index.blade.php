@extends('layouts.app')
@section('title')
    {{ trans('parents.title') }}
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
                                <a href="{{ route('parents.create') }}" class="btn btn-success">
                                    <i class="ti-plus"></i>
                                    {{ trans('parents.new') }}
                                </a>
                            @endcan
                            @can('Parents-import_Excel')
                                <button type="button" class="btn btn-primary" data-target="#Import_Excel"
                                    data-toggle="modal"><i class="ti-upload"></i>
                                    {{ trans('general.Import_Excel') }}</button>
                                @include('backend.parents.import')
                            @endcan
                        </div>
                    </div>
                    <div class="table-responsive">
                        @can('parents-list')
                            <table class="table table-striped table-hover table-sm" id="parents_datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('Parents.Father_Name') }}</th>
                                        <th>{{ trans('Parents.Father_Phone') }}</th>
                                        <th>{{ trans('Parents.Father_Job') }}</th>
                                        <th>{{ trans('Parents.Mother_Name') }}</th>
                                        <th>{{ trans('Parents.Mother_Phone') }}</th>
                                        <th>{{ trans('Parents.Address') }}</th>
                                        <th>{{ trans('Parents.children_count') }}</th>
                                        <th>{{ trans('General.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#parents_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('parents.datatable') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'Father_Name',
                        name: 'Father_Name'
                    },
                    {
                        data: 'Father_Phone',
                        name: 'Father_Phone'
                    },
                    {
                        data: 'Father_Job',
                        name: 'Father_Job'
                    },
                    {
                        data: 'Mother_Name',
                        name: 'Mother_Name'
                    },
                    {
                        data: 'Mother_Phone',
                        name: 'Mother_Phone'
                    },
                    {
                        data: 'Address',
                        name: 'Address'
                    },

                    {
                        data: 'childrens',
                        name: 'childrens'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                language: {
                    url: "{{ asset('assests/' . app()->getLocale() . '.json') }}"
                },
                responsive: true,
                lengthMenu: [
                    [20, 40, 50, -1],
                    [20, 40, 50, "الكل"]
                ],
            });
        });
    </script>
    <sctipt>
        $(document).ready(function() {
            $('.dataTables_length select').removeClass().addClass('custom-select');
        })
    </sctipt>
@endpush
