@extends('layouts.app')
@section('title')
    {{ trans('classes.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-semibold text-gray-800">{{ trans('classes.title') }}</h4>
            @can('classes-create')
                <button type="" data-toggle="modal" data-target="#Createclasses" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    {{ trans('class_rooms.new') }}
                </button>
                @include('backend.classes.create')
            @endcan
        </div>

        @can('classes-list')
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('classes.name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('classes.grades') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('classes.classroom') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Student_Count') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($classes as $class)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                <a href="{{ route('classes.show', $class) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    {{ $class->title }}
                                </a>
                                <span class="text-gray-500">{{ $class->tammen() }}</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $class->grade->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $class->class_room->name }}</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $class->students_count }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    @can('classes-addstudent')
                                    <a href="{{ route('classes.show', $class->id) }}" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg" title="{{ trans('general.info') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('classes.add_students', $class) }}" class="p-2 text-green-600 hover:bg-green-50 rounded-lg" title="{{ trans('classes.add_Students') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('classes-update')
                                    <button type="button" data-toggle="modal" data-target="#class-edit-{{ $class->id }}" class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg" title="{{ trans('general.edit') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    @endcan
                                    @can('classes-tammen')
                                    <a href="{{ route('classes.tammen', $class) }}" class="p-2 text-purple-600 hover:bg-purple-50 rounded-lg" title="{{ trans('classes.tammen') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @can('classes-delete')
                                    <form action="{{ route('classes.destroy', $class->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg" onclick="confirmation(event)" title="{{ trans('general.delete') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @include('backend.classes.edit')
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                                {{ trans('general.noDataToShow') }}
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        @endcan
    </div>
@endsection