@extends('layouts.app')
@section('title')
    {{ trans('labs.index') }}
@endsection
@section('content')
    @include('backend.msg')

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
        <div class="flex justify-between items-center mb-6">
            <div></div>
            @include('backend.labs.create')
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($labs as $main_lab)
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                <div class="flex justify-between items-center p-4 border-b border-gray-100">
                    <h6 class="font-medium text-gray-800">{{ $main_lab->location }}</h6>
                    @can('labortories-update')
                    <a href="{{ route('labs.edit', $main_lab->id) }}" class="px-2 py-1 bg-primary text-white text-sm rounded hover:bg-primary/90">
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
                                        @can('labortories-show')
                                            <a href="{{ route('labs.show', $laboratory->id) }}"
                                               class="inline-flex items-center justify-center w-8 h-8 text-primary hover:text-white hover:bg-primary rounded-lg transition-all duration-150 focus:ring-2 focus:ring-primary/30">
                                                <x-hero-icon name="information-circle" class="w-4 h-4" />
                                            </a>
                                        @endcan
                                        @can('labortories-delete')
                                            <form action="{{ route('labs.destroy', $laboratory->id) }}" method="POST" class="inline-block" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="inline-flex items-center justify-center w-8 h-8 text-danger hover:text-white hover:bg-danger rounded-lg transition-all duration-150 focus:ring-2 focus:ring-danger/30">
                                                    <x-hero-icon name="trash" class="w-4 h-4" />
                                                </button>
                                            </form>
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
@endsection

