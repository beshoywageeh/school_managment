@extends('layouts.app')
@section('title')
    {{ trans('Sidebar.graduated') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            @can('Students-list')
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('student.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('student.grad_year') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($students as  $student)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->index + 1 }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $student->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $student->grade->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $student->classroom->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $student->deleted_at->format('Y') }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        @can('Student-restore')
                                            <a class="px-3 py-1 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary/90"
                                                href="{{ route('students.restore', $student->id) }}">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                </svg>
                                            </a>
                                        @endcan
                                        @can('Students-delete')
                                            <a class="px-3 py-1 bg-danger text-white rounded-lg text-sm font-medium hover:bg-danger/90" onclick="confirmation(event)"
                                                href="{{ route('students.forceDelete', $student->id) }}">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="6" class="px-6 py-12 text-center text-gray-500">{{ trans('general.noDataToShow') }}</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            @endcan
        </div>
    </div>
    @push('scripts')
    @endpush
@endsection