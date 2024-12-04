@extends('layouts.app')
@section('title')
    {{ trans('adminera.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-satistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class='table table-bordered table-striped table-sm'>
                            <thead class='alert-success'>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('adminera.code') }}</th>
                                    <th>{{ trans('adminera.name') }}</th>
                                    <th>{{ trans('adminera.email') }}</th>
                                    <th>{{ trans('adminera.isAdmin') }}</th>
                                    <th>{{ trans('adminera.login_Allow') }}</th>
                                    <th>{{ trans('adminera.type') }}</th>
                                    <th>{{ trans('adminera.password') }}</th>
                                    <th>{{ trans('adminera.permission') }}</th>
                                    <th>{{ trans('General.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Employees as $employee)
                                    <form method="post" action="{{ route('employee.update', $employee->id) }}"
                                        id="form-{{ $employee->id }}">
                                        @csrf
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $employee->code }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ $employee->email }}" />

                                            </td>
                                            <td><input type="checkbox" class="form-control" disabled name="isAdmin"
                                                    @checked($employee->isAdmin == 1) /></td>
                                            <td>
                                                <input type="checkbox" name="login_allow" disabled class="form-control"
                                                    @checked($employee->login_allow == 1) />
                                            </td>
                                            <td>{{ $employee->job->name ?? 'N/A' }}</td>
                                            <td>

                                                <input type="password" name="password" class="form-control" />

                                            </td>
                                            <td>

                                                <select name="role" disabled class="custom-select">

                                                    @forelse ($Permissions as $permission)
                                                        <option @selected($employee->roles[0]->id == $permission->id) value="{{ $permission->name }}">
                                                            {{ trans('permissions.' . $permission->name) }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </td>
                                            <td>
                                                @if($employee->isAdmin != 1)
                                                <button type="submit"
                                                    class="btn btn-outline-primary btn-sm">{{ trans('General.Submit') }}</button>
                                                    @endif
                                            </td>
                                        </tr>
                                    </form>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>




    @push('scripts')
        <script></script>
    @endpush
@endsection
