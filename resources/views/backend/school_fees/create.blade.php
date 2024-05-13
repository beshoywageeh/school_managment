@extends('layouts.app')
@section('title')
{{trans('fees.title')}} | {{trans('general.new')}}
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="flex justify-between mb-4">
            <h4 class="card-title">{{ trans('general.new') }}</h4>
        </div>
        <br>
        @include('backend.msg')
        <form id="form-with-multiple-column" class="max-w-full" action="{{route('schoolfees.store')}}" method="post">
            @csrf
            <div class="flex flex-col gap-4 my-4">
                <!-- Form Row: One -->
                <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                    <!-- Form Column: Username -->
                    <x-input name='desc' class='' type='text'>{{
                        trans('fees.desc') }}</x-input>
                    <x-input name='amount' class='' type='number'>{{
                        trans('fees.amount') }}</x-input>
                </div>
                <!-- Form Row: Two -->
                <div class="flex flex-col items-center w-full gap-4 md:flex-row">
                    <div class="w-full md:w-1/3">
                        <label class="label label-required" for="form-horizontal-full-name">
                            {{trans('student.choose_grade')}}
                        </label>
                        <select class='select' name="grade" id="grades">
                            <option> {{trans('student.choose_grade')}}</option>
                            @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->Grade_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full md:w-1/3">
                        <label class="label label-required" for="form-horizontal-full-name">
                            {{trans('student.choose_classroom')}}
                        </label>
                        <select class='select' name="class_room" id="classrooms">
                            <option>{{trans('student.choose_classroom')}}</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/3">
                        <label class="label label-required" for="form-horizontal-full-name">
                            {{trans('fees.academic_year')}}
                        </label>
                        <select class='select' name="academic" >
                            <option> {{trans('fees.choose_academic_year')}}</option>

                        </select>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end w-full gap-2">
                <button class="btn btn-primary" type="submit">{{ trans('General.Submit') }}</button>
            </div>
        </form>

    </div>
</div>

@push('scripts')
<script>
    const classrooms = document.querySelector('#classrooms');
    const grades=document.querySelector('#grades')
    grades.addEventListener('change', async () => {

        classrooms.innerHTML = '<option>{{trans('student.choose_classroom')}}</option>';
        const response = await fetch(`/ajax/get_classRooms_fee/${grades.value}`)
        const data = await response.json();
        data.forEach(class_rooms => {
            const option = document.createElement('option');
            option.value = class_rooms.id;
            option.text = class_rooms.class_name;
            classrooms.appendChild(option);
        });

    });
</script>
@endpush
@endsection
