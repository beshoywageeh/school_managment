@extends('layouts.app')
@section('title')
    {{ trans('system_lookup.title') }}
@endsection
@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="flex justify-between mb-4">
                    <h4 class="card-title">{{ trans('system_lookup.title') }}</h4>

                </div>
                <div class="table-resposive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('system_lookup.user') }}</th>
                                <th>{{ trans('system_lookup.action') }}</th>
                                <th>{{ trans('system_lookup.model') }}</th>
                                <th>{{ trans('system_lookup.ip') }}</th>
                                <th>{{ trans('system_lookup.date_time') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($system_logs as $systemlog)
                                <tr>
                                    <td> {{ $system_logs->firstItem()+$loop->index }}</td>

                                    <td>{{ $systemlog->users->first_name }}</td>
                                    <td>{!! $systemlog->syslog_action() !!}</td>
                                    <td>{{ $systemlog->model }}</td>
                                    <td>{{ $systemlog->ip }}</td>
                                    <td>{{$systemlog->created_at->format('d-m-Y | g:i:s A')}}</td>
                                </tr>
                                @if (isset($systemlog->data))
                                <tr>
                                    <td colspan="6">{{trans('system_lookup.data')}}</td></tr>
                                    <tr>
@foreach ($systemlog->data as $data )

    <td> {{ $data }}</td>

@endforeach
</tr>
                                 @endif

                                    @empty
                                <div class="alert alert-info" role="alert">
                                    <p>{{ trans('General.Msg') }}</p>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $system_logs->links('components.Paginatortion') }}
                </div>
            </div>
        </div>
    </div>
    @push('scripts')

    @endpush
@endsection
