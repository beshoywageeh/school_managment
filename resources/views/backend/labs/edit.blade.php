@extends('layouts.app')
@section('title')
    {{ trans('general.edit') }} | {{ $laboratory->location }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <form action="{{ route('labs.update') }}" method="post">
                    @csrf
                    <div class="card-header bg-info">
                        <div class="row">
                            <div class="col">

                                <input type="hidden" name="id" value="{{ $laboratory->id }}">
                                <label class="text-white">{{ trans('labs.location') }}</label>
                            </div>
                            <div class="col">
                                <input type="text" name="location" class="form-control"
                                    value="{{ $laboratory->location }}">
                            </div>
                            <div class="col-md-2 text-right">
                                <button class="btn btn-success btn-block" type="submit">{{ trans('General.Submit') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @forelse ($laboratory->sub_locations as $location)
                            <div class="row mb-4">
                                <div class="col"><label>{{ trans('labs.name') }}</label></div>
                                <div class="col">
                                    <input type="hidden" name="sub_location_id[]" value="{{ $location->id }}">
                                    <input type="text" name="sub_locations[]" class="form-control"
                                        value="{{ $location->sub_location }}">
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush
