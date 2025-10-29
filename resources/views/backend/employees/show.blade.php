@extends('layouts.app')
@section('title')
    {{ trans('employees.title') }} | {{ trans('General.show') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ $user->name }}</h4>
                        </div>
                        <div class="col text-md-right">
                            <button class="btn btn-info" onclick="printDiv()">{{ trans('general.print') }}</button>
                        </div>
                    </div>
                    <div id="print" class="table-responsive">
                        @can('employees-list')
                            <table class="table table-striped table-bordered table-sm">
                                <tr>
                                    <th>{{ trans('employees.code') }}</th>
                                    <th>{{ trans('employees.name') }}</th>
                                    <th>{{ trans('employees.learning') }}</th>
                                    <th>{{ trans('employees.grade_year') }}</th>
                                    <th>{{ trans('employees.join_date') }}</th>
                                    <th>{{ trans('employees.birth_date') }}</th>
                                    <th>{{ trans('employees.job') }}</th>
                                </tr>
                                <tr>
                                    <td>{{ $user->code }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td> {{ $user->learning }}</td>
                                    <td>{{ $user->grade_year }}</td>
                                    <td>{{ $user->date_of_hiring }}</td>
                                    <td>{{ $user->date_of_birth }}</td>
                                    <td>{{ $user->job->name ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>{{trans('employees.insurance_status')}}</th>
                                    <th>{{trans('employees.insurance_number')}}</th>
                                    <th>{{trans('employees.insurance_date')}}</th>
                                </tr>
                                <tr>
                                    <td>{{($user->insurance == 0) ? 'غير مؤمن' : ' مؤمن'}}</td>
                                    <td>{{$user->insurance_number}}</td>
                                    <td>{{$user->insurance_date}}</td>

                                </tr>
                                </tbody>
                            </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
@endsection
