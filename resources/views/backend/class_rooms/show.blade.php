@extends('layouts.app')
@section('title')
{{trans('class_rooms.title')}} - {{ $data['class_room']->class_name }}
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
<div>
    <div class="card" id="print">
        <div class="card-body">
            <div class="flex justify-between mb-4">
                <h4 class="card-title">{{ $data['class_room']->class_name }}</h4>
                <x-button id="print_Button" class="primary" onclick="printDiv()">
                    <i class="w-4" data-feather="printer"></i>
                    {{ trans('general.print') }}
                </x-button>
            </div>
            <div class="table-resposive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('Student.Name') }}</th>
                            <th>{{ trans('Stubent.birth_date') }}</th>
                            <th>{{ trans('class_rooms.Added_By') }}</th>
                            <th>{{ trans('class_rooms.Add_date') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['class_room']->students as $student)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->birth_date}}</td>
                            <td>{{$student->user->first_name}}</td>
                            <td>{{$student->created_at->format('Y/m/d')}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</script>


@endpush
@endsection