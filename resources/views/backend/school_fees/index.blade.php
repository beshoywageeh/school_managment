@extends('layouts.app')
@section('title')
    {{ trans('fees.title') }}
@endsection
@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="flex justify-between mb-4">
                    <h4 class="card-title">{{ trans('fees.title') }}</h4>
                    <a class="btn btn-primary" href={{route('schoolfees.create')}}>
                        <i class="w-4" data-feather="plus-square"></i>
                        {{ trans('General.new') }}
                    </a>
                </div>
                <div class="table-resposive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('fees.grade') }}</th>
                                <th>{{ trans('fees.classroom') }}</th>
                                <th>{{trans('academic_year.title')}}</th>
                                <th>{{ trans('fees.desc') }}</th>
                                <th>{{ trans('fees.amount') }}</th>
                                <th>{{ trans('fees.by') }}</th>
                                <th>{{ trans('general.created_at') }}</th>
                                <th>{{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($School_Fees as $fee)
                                <tr>
                                    <td> {{ $School_Fees->firstItem()+$loop->index }}</td>
                                    <td>{{ $fee->grade->name }}</td>
                                    <td>{{ $fee->classroom->name }}</td>
                                    <td></td>
                                    <td>{{ $fee->user->name }}</td>
                                    <td>{{ $fee->description }}</td>
                                    <td>{{ number_format($fee->amount, 2) }}&nbsp;ج.م</td>
                                    <td>{{$fee->created_at->format('Y-m-d')}}</td>
                                    <td>
                                        -
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-info" role="alert">
                                    <p>{{ trans('General.Msg') }}</p>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $School_Fees->links('components.Paginatortion') }}
                </div>
            </div>
        </div>
        @include('backend.Grades.Create')
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            //  import Swal from 'sweetalert2/dist/sweetalert2.js';

            function confirmation(ev) {
                ev.preventDefault();
                const urlToRedirect = ev.currentTarget.getAttribute('href');
                console.log(urlToRedirect);
                Swal.fire({
                    title: "{{ trans('general.confirm') }}",
                    text: "{{ trans('general.confirmation') }}",
                    icon: "warning",
                    showConfirmButton: true,
                    shoCancelButton: true,
                    dangerMode: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = urlToRedirect;
                    }
                });
            }
        </script>

    @endpush
@endsection
