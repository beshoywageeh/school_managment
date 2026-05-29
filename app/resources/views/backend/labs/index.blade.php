@extends('layouts.app')
@section('title')
    {{ trans('labs.index') }}
@endsection
@section('content')
    @include('backend.msg')

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
        <div class="flex justify-between items-center mb-6">
            <div></div>
            @can('labortories-create')
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 flex items-center gap-2" data-toggle="modal" data-target="#lab_create">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    {{ trans('general.new') }}
                </button>
            @endcan
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($labs as $main_lab)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="flex justify-between items-center p-4 border-b border-gray-100">
                    <h6 class="font-medium text-gray-800">{{ $main_lab->location }}</h6>
                    @can('labortories-update')
                    <a href="{{ route('labs.edit', $main_lab->id) }}" class="px-2 py-1 bg-yellow-500 text-white text-sm rounded hover:bg-yellow-600">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                    @endcan
                </div>
                <div class="p-4">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <tr class="border-b border-gray-100">
                                <th class="py-2 text-right text-xs font-medium text-gray-500">#</th>
                                <th class="py-2 text-right text-xs font-medium text-gray-500">{{ trans('labs.name') }}</th>
                                <th class="py-2 text-right text-xs font-medium text-gray-500">{{ trans('general.actions') }}</th>
                            </tr>
                            <tbody>
                                @forelse ($main_lab->sub_locations as $laboratory)
                                <tr class="border-b border-gray-50">
                                    <td class="py-2 text-gray-600">{{ $loop->index + 1 }}</td>
                                    <td class="py-2 text-gray-800">{{ $laboratory->sub_location }}</td>
                                    <td class="py-2">
                                        @can('labortories-delete')
                                        <a href="{{ route('labs.show', $laboratory->id) }}" class="mx-1 px-2 py-1 bg-blue-500 text-white text-xs rounded hover:bg-blue-600">
                                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        @endcan
                                        @can('labortories-delete')
                                        <a href="{{ route('labs.destroy', $laboratory->id) }}" class="mx-1 px-2 py-1 bg-red-500 text-white text-xs rounded hover:bg-red-600" onclick="confirmation(event)">
                                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                        @endcan
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="py-4 text-center text-gray-500">{{ trans('general.noDataToShow') }}</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('backend.labs.create')
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.labs_list').repeater({
                show: function() {
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        });
    </script>
@endpush