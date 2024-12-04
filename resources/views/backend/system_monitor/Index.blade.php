@extends('layouts.app')
@section('title')
    {{ trans('system_lookup.title') }}
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
                                    <th>{{trans('system_lookup.user')}}</th>
                                    <th>{{trans('system_lookup.action')}}</th>
                                    <th>{{trans('system_lookup.action')}}</th>
                                    <th>{{trans('system_lookup.created_at')}}</th>
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
                                        <td>{{ $activity->created_at->diffForHumans() }}</td>
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
