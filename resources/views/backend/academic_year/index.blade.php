@extends('layouts.app')
@section('title')
    {{ trans('academic_year.title') }}
@endsection
@push('css')
@endpush
@section('content')
<div class="card mb-4">
    <div class="card-body">
            <form action="{{route('academic_year.store')}}" method="post">
                @csrf
                <div class="flex w-full flex-col items-center gap-1 md:flex-row md:gap-2">
                    <div class="w-full md:w-1/3">
                        <label class="label label-required" for="year_end">{{ trans('academic_year.year_end') }}</label>
                    </div>
                    <div class="w-full md:w-1/3">
                        <input class="input input-date" id="year_end" name="year_end" type="date" >
                    </div>
                    <div class="w-full md:w-1/3">

                        <button type="submit" class="btn btn-primary w-full">{{ trans('general.Submit') }}</button>
                    </div>
                </div>
            </form>
    </div>
</div>
        <div class="card">
            <div class="card-body">

                <div class="table-resposive my-4">
                    <table class="table table-striped table-bordered" id="datatable-filter">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('academic_year.year_start') }}</th>
                                <th>{{ trans('academic_year.year_end') }}</th>
                                <th>{{ trans('general.created_by') }}</th>
                                <th>{{ trans('general.created_at') }}</th>
                                <th>{{ trans('academic_year.status') }}</th>
                                <th>{{ trans('general.updated_by') }}</th>
                                <th>{{ trans('general.updated_at') }}</th>
                                <th>{{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($acadmice_years as $acadmice_year)
                                <tr>
                                    <td> {{ $acadmice_years->firstItem() + $loop->index }}</td>
                                    <td>{{ \Carbon\Carbon::parse($acadmice_year->year_start)->format('Y-m') }}</td>
                                    <td> {{ \Carbon\Carbon::parse($acadmice_year->year_end)->format('Y-m') }}</td>
                                    <td>{{ $acadmice_year->creator->first_name }}</td>
                                    <td>{{ $acadmice_year->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <div
                                            class="badge {{ $acadmice_year->status->color() }}">
                                            {{ $acadmice_year->status->lang() }}
                                        </div>
                                    </td>

                                    <td>{{ ($acadmice_year->updator)?$acadmice_year->updator->first_name:'' }}</td>
                                    <td>{{ ($acadmice_year->updator)?$acadmice_year->updated_at->format('Y-m-d'):'' }}</td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="items-center dropdown-toggle btn btn-primary btn-xs"><i
                                                    class="w-4" data-feather="chevron-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <ul class="dropdown-list">
                                                    <li class="dropdown-list-item">
                                                        <a class="dropdown-link" href="{{ route('academic_year.edit', $acadmice_year->id) }}">
                                                            <i class="w-4" data-feather="toggle-right"></i>
                                                            {{ trans('academic_year.change_status') }}
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-list-item">
                                                        <a href="{{ route('academic_year.destroy', $acadmice_year->id) }}"
                                                            class="dropdown-link" onclick="confirmation(event)"><i
                                                                class="w-4" data-feather="trash-2"></i>
                                                            {{ trans('general.delete') }}</a>
                                                    </li>
                                                    <li class="dropdown-list-item">
                                                        <a target="_blank"
                                                            href="{{ route('academic_year.show', $acadmice_year->id) }}"
                                                            class="dropdown-link">
                                                            <i class="w-4" data-feather="info"></i>
                                                            {{ trans('general.info') }} </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">{{ trans('general.Msg') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $acadmice_years->links('components.Paginatortion') }}
            </div>
        </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush
@endsection
