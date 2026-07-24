@extends('layouts.app')
@section('title')
    {{ trans('adminera.title') }}
@endsection
@push('css')
@endpush
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-green-50">
                    <tr>
                        <th class="px-4 py-2 text-center text-xs font-medium text-green-700 uppercase">#</th>
                        <th class="px-4 py-2 text-start text-xs font-medium text-green-700 uppercase">{{ trans('adminera.code') }}</th>
                        <th class="px-4 py-2 text-start text-xs font-medium text-green-700 uppercase">{{ trans('adminera.name') }}</th>
                        <th class="px-4 py-2 text-start text-xs font-medium text-green-700 uppercase">{{ trans('adminera.email') }}</th>
                        <th class="px-4 py-2 text-center text-xs font-medium text-green-700 uppercase">{{ trans('adminera.isAdmin') }}</th>
                        <th class="px-4 py-2 text-center text-xs font-medium text-green-700 uppercase">{{ trans('adminera.login_Allow') }}</th>
                        <th class="px-4 py-2 text-start text-xs font-medium text-green-700 uppercase">{{ trans('adminera.type') }}</th>
                        <th class="px-4 py-2 text-start text-xs font-medium text-green-700 uppercase">{{ trans('adminera.password') }}</th>
                        <th class="px-4 py-2 text-start text-xs font-medium text-green-700 uppercase">{{ trans('adminera.permission') }}</th>
                        <th class="px-4 py-2 text-center text-xs font-medium text-green-700 uppercase">{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($Employees as $employee)
                        <form method="post" action="{{ route('employees.update', $employee->id) }}"
                            id="form-{{ $employee->id }}">
                            @csrf
                            @method('PUT')
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-center text-gray-600">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 text-gray-800">{{ $employee->code }}</td>
                                <td class="px-4 py-2 text-gray-800 font-medium">{{ $employee->name }}</td>
                                <td class="px-4 py-2">
                                    <input type="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                                        value="{{ $employee->email }}"{{ $employee->id == \Auth::id() ? 'disabled' : '' }} />
                                </td>
                                <td class="px-4 py-2 text-center">
                                    <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-primary" name="isAdmin"
                                        @checked($employee->isAdmin == 1)
                                        {{ $employee->id == \Auth::id() ? 'disabled' : '' }} />
                                </td>
                                <td class="px-4 py-2 text-center">
                                    <input type="checkbox" name="login_allow" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-primary"
                                        @checked($employee->login_allow == 1)
                                        {{ $employee->id == \Auth::id() ? 'disabled' : '' }} />
                                </td>
                                <td class="px-4 py-2 text-gray-600">{{ $employee->type->lang() ?? 'N/A' }}</td>
                                <td class="px-4 py-2">
                                    <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                                        {{ $employee->id == \Auth::id() ? 'disabled' : '' }} />
                                </td>
                                <td class="px-4 py-2">
                                    <select name="role" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                                        {{ $employee->id == \Auth::id() ? 'disabled' : '' }}>
                                        @forelse ($Permissions as $permission)
                                            <option value="{{ $permission->name }}">
                                                {{ trans('permissions.' . $permission->name) }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </td>
                                <td class="px-4 py-2 text-center">
                                    @if (\Auth::user()->isAdmin == 1)
                                        <button type="submit"
                                            class="px-3 py-1 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary/90">{{ trans('general.Submit') }}</button>
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

    @push('scripts')
        <script></script>
    @endpush
@endsection
