@extends('layouts.app')
@section('title')
    {{ trans('labs.index') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">

            <div class="mb-4 row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 text-md-right">
                    @can('labortories-create')
                        <button class="btn btn-primary" data-toggle="modal" data-target="#lab_create"><i
                                class="mr-2 ti-plus"></i>{{ trans('general.new') }}</button>
                    @endcan
                </div>
            </div>

            <div class="row">
                @foreach ($labs as $main_lab)
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="text-center card-header">
                                <div class="row">
                                    <div class="col">
                                        <h6>{{ $main_lab->location }}</h6>
                                    </div>
                                    <div class="col">
                                        @can('labortories-update')
                                            <a href="{{ route('labs.edit', $main_lab->id) }}" class="btn btn-warning btn-sm"><i
                                                    class="ti-pencil"></i></a>
                                        @endcan


                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered">
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('labs.name') }}</th>
                                            <th>{{ trans('general.actions') }}</th>
                                        </tr>
                                        <tbody>
                                            @forelse ($main_lab->sub_locations as $laboratory)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $laboratory->sub_location }}</td>
                                                    <td>
                                                        @can('labortories-delete')
                                                            <a href="{{ route('labs.show', $laboratory->id) }}"
                                                                class="mx-2 btn btn-info btn-sm"><i class="ti-eye"></i></a>
                                                        @endcan
                                                        @can('labortories-delete')
                                                            <a href="{{ route('labs.destroy', $laboratory->id) }}"
                                                                class="btn btn-danger btn-sm" onclick="confirmation(event)"><i
                                                                    class="ti-trash"></i></a>
                                                        @endcan

                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3">{{ trans('general.noDataToShow') }}</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

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
