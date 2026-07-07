@extends('layouts.app')
@section('title')
    {{ trans('Parents.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100">
            <div class="flex justify-between items-center">
                <h4 class="text-lg font-bold text-gray-800">{{ trans('Parents.title') }}</h4>
                <div class="flex gap-3">
                    @can('parents-create')
                        <a href="{{ route('parents.create') }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                            {{ trans('general.buttons.create') }}
                        </a>
                    @endcan

                        @include('backend.Parents.import')

                </div>
            </div>
        </div>
        <div class="p-6">
            @can('parents-list')
                <livewire:parents-table />
            @endcan
        </div>
    </div>
@endsection
@push('scripts')
@endpush
