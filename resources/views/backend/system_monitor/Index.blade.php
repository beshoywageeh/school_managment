@extends('layouts.app')
@section('title')
    {{ trans('system_lookup.title') }}
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="">
                    <h4 class="card-title">{{ trans('system_lookup.title') }}</h4>

                </div>
                <div class="table-responsive">
                    <table class="table text-center table-striped table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('system_lookup.action') }}</th>
                                <th>{{ trans('system_lookup.user') }}</th>
                                <th>{{ trans('system_lookup.model') }}</th>
                                <th>{{ trans('system_lookup.date_time') }}</th>

                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($system_logs as $activityLog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>   @if($activityLog->description == 'created')
                                        <span class="badge badge-success">{{trans('system_lookup.created')}}</span>
                                    @elseif($activityLog->description == 'updated')
                                        <span class="badge badge-warning">{{trans('system_lookup.updated')}}</span>
                                    @elseif($activityLog->description == 'deleted')
                                        <span class="badge badge-danger">{{trans('system_lookup.deleted')}}</span>
                                    @else
                                        <span class="badge badge-info">{{ ucfirst($activityLog->description) }}</span>
                                    @endif</td>
                                <td>{{ $activityLog->causer->name }}</td>
                                <td>{{ $activityLog->subject_type }} #{{ $activityLog->subject_id }}</td>
                                <td>{{ $activityLog->created_at->format('d-m-Y | g:i:s A') }}</td>


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
    </div>
</div>


    @push('scripts')
    @endpush
@endsection
