@extends('layouts.app')
@section('title')
    {{ trans('backup.title') }}
@endsection
@push('css')
    <style>
        table,
        thead,
        tbody,
        tr,
        td,
        th {
            text-align: center !important;
        }
    </style>
@endpush
@section('content')
    @include('backend.msg')
    <div class="mb-3 card">
        <div class="card-body">
            <div class="flex justify-between mb-4">
                <h4 class="card-title">{{ trans('backup.title') }}</h4>
                <a href="{{ route('backup.create') }}" class="btn btn-primary" role="button">{{ trans('backup.create') }}</a>
            </div>
            <br>
            <hr>
            <br>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-info">
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
                                <td>{{ $loop->index + 1 }}</td>
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

                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <td colspan="2">{{ trans('backup.news') }}</td>
                                                    <td colspan="2">{{ $file }}</td>
                                                    <td colspan="2">
                                                        <a href="{{ route('backup.download', $file) }}"
                                                            class="btn btn-plain-primary btn-xs" role="button" download><i
                                                                data-feather="download" height="1rem"
                                                                width="1rem"></i></a>
                                                        <a href="{{ route('backup.delete', $file) }}"
                                                            class="btn btn-plain-danger btn-xs" role="button"><i
                                                                data-feather="trash-2" height="1rem"
                                                                width="1rem"></i></a>

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
            </div>
        </div>
    </div>

    <div class="mt-3 card">
        <div class="card-body">

            <div class="table-resposive">
                <table class="table table-striped table-bordered" id="datatable-filter">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('backup.name') }}</th>
                            <th>{{ trans('backup.date') }}</th>
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
                                    {{ $backup['file_date']->format('g:i:s A') .
                                        ' |
                                    ' .
                                        $backup['file_date']->diffForHumans() }}
                                </td>
                                <td>
                                    <a href="{{ route('backup.download', $backup['file_name']) }}"
                                        class="btn btn-plain-primary btn-xs" role="button" download><i
                                            data-feather="download" height="1rem" width="1rem"></i></a>
                                    <a href="{{ route('backup.delete', $backup['file_name']) }}"
                                        class="btn btn-plain-danger btn-xs" role="button"><i data-feather="trash-2"
                                            height="1rem" width="1rem"></i></a>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-info" role="alert">
                                <p>{{ trans('General.Msg') }}</p>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.box-body -->
    </div>
@endsection
@push('scripts')
@endpush
