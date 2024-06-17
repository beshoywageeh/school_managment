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
                    <div class="">
                        <h4 class="card-title">{{ trans('system_lookup.title') }}</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-center table-striped" id="datatable">
                            <thead>
                            <tr>
                                <th>{{trans('system_lookup.user')}}</th>
                                <th>{{ trans('system_lookup.action') }}</th>
                                <th>{{ trans('system_lookup.date_time') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($system_logs as $activityLog)
                                <tr>
                                    <td>{{$activityLog->causer->name}}</td>
                                    <td>{{$activityLog->description}}</td>
                                    <td>{{ \Carbon\Carbon::parse($activityLog->created_at)->addHour('1')->diffForHumans() }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-info"
                                     role="alert">
                                    <p>{{ trans('General.Msg') }}</p>
                                </div>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection
