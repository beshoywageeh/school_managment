@extends('layouts.app')
@section('title')
    {{ trans('Grades.title') }}
@endsection

@section('content')

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('Grades.title') }}</h4>
            @include('backend.Grades.create')
        </div>

        @can('grade-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.by') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.class_count') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('Grades.student_count') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($data['grades'] as $grade)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $data['grades']->firstItem() + $loop->index }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                <a target="_blank" href="{{ route('grade.show', $grade->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    {{ $grade->name }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $grade->user->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $grade->created_at->format('Y/m/d') }}</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $grade->class_rooms_count }}</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $grade->students_count }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-around gap-2">
                                    <a href="{{ route('grade.show', $grade->id) }}" class="text-blue-600 hover:bg-blue-50 rounded-lg" title="{{ trans('general.info') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
<div>
                                    @include('backend.Grades.edit')
</div>
                                    @can('grade-delete')
                                        <div>
                                    <form action="{{ route('grade.destroy', $grade->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:bg-red-50 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                    </div>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                {{ trans('general.no_data') }}
                            </td>
                        </tr>

                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($data['grades']->hasPages())
            <div class="p-4 border-t border-gray-100 flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    Showing {{ $data['grades']->firstItem() ?? 0 }} to {{ $data['grades']->lastItem() ?? 0 }} of {{ $data['grades']->total() }} results
                </div>
                <div class="flex gap-1">
                    @if($data['grades']->currentPage() > 1)
                    <a href="{{ $data['grades']->previousPageUrl() }}" class="px-3 py-1 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">Previous</a>
                    @endif
                    @if($data['grades']->hasMorePages())
                    <a href="{{ $data['grades']->nextPageUrl() }}" class="px-3 py-1 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">Next</a>
                    @endif
                </div>
            </div>
            @endif
        @endcan
    </div>
@endsection
