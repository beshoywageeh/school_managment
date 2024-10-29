@extends('layouts.app')
@section('title')
    {{ trans('backup.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col-lg">
                            <h4 class="">{{ trans('backup.title') }}</h4>
                        </div>
                        <div class="col-lg text-md-right">
                            @can('backup-list')
                                <a href="{{ route('backup.create') }}" class="btn btn-success" role="button">
                                    <i class="ti-server"></i>
                                    {{ trans('backup.create') }}</a>
                            @endcan
                        </div>
                    </div>

                    <div class="table-responsive">
                        @can('backup-list')
                            <table class="table table-hover table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('backup.folder_name') }}</th>
                                        <th>{{ trans('backup.disk') }}</th>
                                        <th>{{ trans('backup.reachable') }}</th>
                                        <th>{{ trans('backup.health') }}</th>
                                        <th>{{ trans('backup.num') }}</th>
                                        <th>{{ trans('backup.news') }}</th>
                                        <th>{{ trans('backup.storage') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rows as $index => $backup)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $backup[0] }}</td>
                                            <td>{{ $backup['disk'] }}</td>
                                            <td>{{ $backup[1] }}</td>
                                            <td>{{ $backup[2] }}</td>
                                            <td>{{ $backup['amount'] }}</td>
                                            <td>{{ $backup['newest'] }}</td>
                                            <td>{{ $backup['usedStorage'] }}</td>
                                        </tr>
                                        @foreach ($backup['files'] as $file)
                                            @if ($loop->first)
                                                <tr>
                                                    <td colspan="8">

                                                        <table class="table table-bordered table-sm">
                                                            <tr>
                                                                <td colspan="2">{{ trans('backup.news') }}</td>
                                                                <td colspan="2">{{ $file }}</td>
                                                                <td colspan="2">
                                                                    <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                                        [
                                                                            'type' => 'button',
                                                                            'url' => route('backup.delete', $file),
                                                                            'text' => trans('general.delete'),
                                                                            'icon' => 'ti-trash',
                                                                            'can' => 'backup-delete',
                                                                        ],
                                                                        [
                                                                            'type' => 'link',
                                                                            'url' => route('backup.download', $file),
                                                                            'text'=>trans('general.download'),
                                                                            'icon' => 'ti-download',
                                                                            'can' => 'backup-download',
                                                                        ],
                                                                    ]" />

                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-30">
        <div class="col">

            <div class="mt-3 card">
                <div class="card-body">

                    <div class="table-resposive">
                        @can('backup-list')
                            <table class="table table-striped table-bordered table-sm" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('backup.name') }}</th>
                                        <th>{{ trans('general.created_at') }}</th>
                                        <th>{{ trans('backup.size') }}</th>
                                        <th colspan="2">{{ trans('backup.time') }}</th>
                                        <th>{{ trans('general.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($backups as $backup)
                                        <tr>
                                            <td> {{ $loop->index + 1 }}</td>
                                            <td>{{ $backup['file_name'] }}</td>
                                            <td>{{ $backup['file_date']->format('Y-m-d') }}</td>
                                            <td>{{ $backup['file_size'] }}</td>
                                            <td colspan='2'>
                                                {{ $backup['file_date']->format('g:i:s A') . ' |' . $backup['file_date']->diffForHumans() }}
                                            </td>
                                            <td>
                                                <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('backup.delete', $backup['file_name']),
                                                        'text' => trans('general.delete'),
                                                        'icon' => 'ti-trash',
                                                        'can' => 'backup-delete',
                                                    ],
                                                    [
                                                        'type' => 'link',
                                                        'url' => route('backup.download', $backup['file_name']),
                                                        'text'=>trans('general.download'),
                                                        'icon' => 'ti-download',
                                                        'can' => 'backup-download',
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

@endsection
@push('scripts')
@endpush
