@extends('layouts.app')
@section('title')
    {{ trans('adminera.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
         
                    <div class="table-responsive">
                        <table class='table table-bordered table-striped'>
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
                                                    value="{{ $employee->email }}"{{$employee->id == \Auth::id() ? 'disabled' : ''}} />
                                            </td>
                                            <td><input type="checkbox" class="form-control" name="isAdmin"
                                                    @checked($employee->isAdmin == 1) {{$employee->id == \Auth::id() ? 'disabled' : ''}}/></td>
                                            <td>
                                                <input type="checkbox" name="login_allow" class="form-control"
                                                    @checked($employee->login_allow == 1) {{$employee->id == \Auth::id() ? 'disabled' : ''}}/>
                                            </td>
                                            <td>{{ $employee->type->lang() ?? 'N/A' }}</td>
                                            <td>
                                                <input type="password" name="password" class="form-control"
                                                {{$employee->id == \Auth::id() ? 'disabled' : ''}} />
                                            </td>
                                            <td>
                                                <select name="role" class="custom-select" {{$employee->id == \Auth::id() ? 'disabled' : ''}}>
                                                    @forelse ($Permissions as $permission)
                                                        <option value="{{ $permission->name }}">
                                                            {{ trans('permissions.' . $permission->name) }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </td>
                                            <td>
                                                @if (\Auth::user()->isAdmin == 1)
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




    @push('scripts')
        <script></script>
    @endpush
@endsection
