@extends('layouts.app')
@section('title')
{{trans('parents.show')}} | {{ $parent->Father_Name }}
@endsection
@push('css')
<style>
    @media print {
        #print_Button {
            display: none;
        }
    }
</style>
@endpush
@section('content')
<div class="mb-4 row">
    <div class="col">
        <div class="card" id="print">
            <div class="card-body">
                <div class="row card-title">
                   <div class="col">
                       <h4>{{ $parent->Father_Name }}</h4>
                   </div>
                    <div class="col text-md-right">
                        <x-button id="print_Button" class="primary" type="" onclick="printDiv()">
                            <i class="ti-print"></i>
                            {{ trans('general.print') }}
                        </x-button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>{{ trans('Parents.Father_Name') }}</th>
                            <td>{{ $parent->Father_Name }}</td>
                            <th>{{ trans('Parents.Father_Phone') }}</th>
                            <td>{{ $parent->Father_Phone }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('Parents.Mother_Name') }}</th>
                            <td>{{ $parent->Mother_Name }}</td>
                            <th>{{ trans('Parents.Mother_Phone') }}</th>
                            <td>{{ $parent->Mother_Phone }}</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="mt-4 table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>{{trans('student.name')}}</th>
                            <th>{{trans('student.birth_date')}}</th>
                            <th>{{trans('student.gender')}}</th>
                            <th>{{trans('student.grade')}}</th>
                        </tr>
                        @forelse ($parent->students as $student )
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->birth_date}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->grade->name}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">{{trans('general.not_found')}}</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')

@endpush
@endsection
