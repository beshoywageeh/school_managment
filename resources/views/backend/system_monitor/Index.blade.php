@extends('layouts.app')
@section('title')
    {{ trans('system_lookup.title') }}
@endsection
@section('content')

        <div class="card">
            <div class="card-body">
                <div class="flex justify-between mb-4">
                    <h4 class="card-title">{{ trans('system_lookup.title') }}</h4>

                </div>
                <div class="table-resposive">
                    <table class="table table-striped table-bordered" id="datatable-simple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('system_lookup.action') }}</th>
                                <th>{{ trans('system_lookup.user') }}</th>
                                <th>{{ trans('system_lookup.action') }}</th>
                                <th>{{ trans('system_lookup.date_time') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($system_logs as $systemlog)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td>{{ trans('system_lookup.' . $systemlog->description) }}</td>
                                    <td>{{ $systemlog->causer->name }}</td>
                                    <td>



                                        @foreach ($systemlog->changes['attributes'] as $field => $value)
                                        @if($systemlog->description == 'updated')
                                        <span class="badge badge-warning">
                                        {{ trans('system_lookup.field_change', ['field' => $field, 'old_value' => $systemlog->changes['old'][$field], 'new_value' => $systemlog->changes['attributes'][$field]]) }}
                                        </span>
                                        @endif
                                            <span class="badge badge-info">
                                                {{ trans('system_lookup.field_create', ['value' => $systemlog->changes['attributes'][$field] ]) }}
                                            </span>

                                        @endforeach

                                    <td>{{ $systemlog->created_at->format('d-m-Y | g:i:s A') }}</td>
                                </tr>


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

    @push('scripts')

    @endpush
@endsection
