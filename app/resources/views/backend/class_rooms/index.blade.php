@extends('layouts.app')
@section('title')
    {{ trans('class_rooms.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center">
            <h4 class="text-lg font-bold text-gray-800">{{ trans('class_rooms.title') }}</h4>
            @include('backend.class_rooms.create')

        </div>

        @can('class_rooms-list')
            <div class="overflow-x-auto">
                <table class="min-w-full" >
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Name') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.grades') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Added_By') }}</th>
                            <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('general.created_at') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('class_rooms.Student_Count') }}</th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($data['class_rooms'] as $class_room)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                <a target="_blank" href="{{ route('class-rooms.show', $class_room->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    {{ $class_room->name }}
                                </a>
                                <span class="text-gray-500"><x-tammen-badge :value="$class_room->tameen"/></span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $class_room->grade->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $class_room->user->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $class_room->created_at->format('Y/m/d') }}</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">{{ $class_room->students_count }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-1">
                                    @can('class_rooms-info')
                                    <a href="{{ route('class-rooms.show', $class_room->id) }}" target="_blank" class="p-2 text-primary hover:bg-primary/10 rounded-lg" title="{{ trans('general.info') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    @endcan
                                    @include('backend.class_rooms.edit')
                                    @can('class_rooms-delete')
                                    <form action="{{ route('class-rooms.destroy', $class_room->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="p-2 text-danger hover:bg-danger/10 rounded-lg" x-on:click="window.dispatchEvent(new CustomEvent('show-alert', { detail: {
                                                        title: '{{ trans('general.confirm') }}',
                                                        message: '{{ trans('general.confirmation') }}',
                                                        type: 'danger',
                                                        confirmButtonText: '{{ trans('general.delete') }}',
                                                        onConfirm: () => $el.closest('form').submit()
                                                    } }))" title="{{ trans('general.delete') }}">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                    @endcan
                                    @can('class_rooms-tammen')
                                    <a href="{{ route('class-rooms.tammen', $class_room->id) }}" class="p-2 text-primary hover:bg-primary/10 rounded-lg" title="{{ trans('general.tammen') }}">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </a>
                                    @endcan
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        @endcan
    </div>

@endsection
