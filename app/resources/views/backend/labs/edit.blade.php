@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{ $laboratory->location }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <form action="{{ route('labs.update') }}" method="post">
            @csrf
            <div class="bg-blue-500 p-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                    <div>
                        <input type="hidden" name="id" value="{{ $laboratory->id }}">
                        <label class="text-white text-sm font-medium">{{ trans('labs.location') }}</label>
                    </div>
                    <div class="md:col-span-2">
                        <input type="text" name="location" class="w-full px-4 py-2 border border-white/30 rounded-lg bg-white/20 text-white placeholder-white/70"
                            value="{{ $laboratory->location }}">
                    </div>
                    <div>
                        <button class="w-full px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium"
                            type="submit">{{ trans('general.Submit') }}</button>
                    </div>
                </div>
            </div>
            <div class="p-6">
                @forelse ($laboratory->sub_locations as $location)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-sm font-medium text-gray-700">{{ trans('labs.name') }}</label>
                        </div>
                        <div>
                            <input type="hidden" name="sub_location_id[]" value="{{ $location->id }}">
                            <input type="text" name="sub_locations[]" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                                value="{{ $location->sub_location }}">
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </form>
    </div>
@endsection
@push('scripts')
@endpush