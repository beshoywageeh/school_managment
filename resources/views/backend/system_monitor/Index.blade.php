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
                        <table class="table table-sm table-hover table-striped table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>المستخدم</th>
                                    <th>الإجراء</th>
                                    <th>التفاصيل</th>
                                    <th>التاريخ</th>
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
                                    <td>{{ $activity->created_at->format('Y-m-d H:i:s A') }}</td>
                                </tr>
                                @endforeach
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
