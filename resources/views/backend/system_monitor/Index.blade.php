@extends('layouts.app')
@section('title')
    {{ trans('log.index.title') }}
@endsection
@push('css')
    <style>

    </style>
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ trans('log.index.user') }}</th>
                                    <th>{{ trans('log.index.type') }}</th>
                                    <th>{{ trans('log.index.description') }}</th>
                                    <th>{{ trans('log.index.date') }}</th>
                                    <th>{{ trans('log.index.time') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->user->name ?? 'غير معروف' }}</td>
                                        <td>{{ $activity->action }}</td>
                                        <td>
                                            @if ($activity->description)
                                                {{ $activity->description }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $activity->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $activity->created_at->format('H:i:s') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $activities->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
