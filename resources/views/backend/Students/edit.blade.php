@extends('layouts.app')
@section('title')
{{trans('student.title')}} | {{trans('general.edit')}}
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="flex justify-between mb-4">
            <h4 class="card-title">{{trans('student.title')}} | {{trans('general.edit')}}</h4>
        </div>
        @include('backend.msg')

        <form action="{{route('Students.update',)}}" method="post">
            <input type="hidden" name="id" value="{{$student->id}}">
            @csrf
            <fieldset class='p-4 border-2 border-indigo-600 border-solid rounded'>
                <legend class='m-auto text-center text-muted'>{{trans('student.student_info')}}</legend>
                <div class="flex flex-col items-center w-full gap-1 md:flex-row md:gap-2">

                    <x-input type="text" name="student_name" value="{{$student->name}}">{{ trans('student.name') }}
                    </x-input>
                    <x-input type="date" name="birth_date" class="input-date" value="{{$student->birth_date}}">
                    {{ trans('student.birth_date')}}
                    </x-input>
                    <div class="w-full md:w-1/3">
                        <label for="check_birth" class="mb-1 label">{{trans('student.checkbirth_date')}}</label>
                        <div class="input-group" style="flex-direction: row-reverse">
                            <span class="input-group-text">{{ trans('general.day') }}</span>
                            <input type="text" disabled name="check_birth" class="w-full input input-bordered">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center w-full gap-1 md:flex-row md:gap-2">
                    <x-input type="text" name="national_id" value="{{$student->national_id}}">{{
                        trans('student.national_id') }}
                    </x-input>
                    <x-input type="date" name="join_date" class="input-date" value="{{$student->join_date}}">{{ trans('student.join_date')
                        }}
                    </x-input>
                    <x-input.gender-select name="gender">
                        </x-input.gender-sele>
                </div>
                <div class="flex flex-col items-center w-full gap-1 md:fkex-row md:gap-2">
                    <div class="w-full">
                        <lable>{{trans('student.address')}}</lable>
                        <textarea class="input" name="address" id="" cols="30" rows="5">{{$student->address}}</textarea>
                    </div>
                </div>
            </fieldset>
            <br>
            <hr><br>
            <fieldset class='p-4 border-2 border-indigo-600 border-solid rounded'>
                <legend class='m-auto text-center text-muted'>{{trans('student.study_info')}}</legend>
                <div class="flex flex-col items-center w-full gap-1 md:flex-row md:gap-2">

                    <div class="w-full md:w-1/3">
                        <label class="label label-required" for="form-horizontal-full-name">
                            {{trans('student.choose_grade')}}
                        </label>
                        <select class='select' name="grade" id="grades">
                            <option> {{trans('student.choose_grade')}}</option>
                            @foreach ($grades as $grade)
                            <option @selected($student->grade_id==$grade->id) value="{{ $grade->id }}">{{ $grade->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full md:w-1/3">
                        <label class="label label-required" for="form-horizontal-full-name">
                            {{trans('student.choose_classroom')}}
                        </label>
                        <select class='select' name="class_room" id="classrooms">
                            <option selected value="{{$student->classroom_id}}">{{$student->classroom->name}}</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/3">
                        <label for="parent" class="mb-1 label">{{trans('student.parent')}}</label>
                        <select name="parents" id="" class="w-full input input-bordered tom-select">
                            <option> {{trans('student.parent')}}</option>

                            @foreach ($parents as $parent)
                            <option @selected($student->parent_id==$parent->id) value="{{$parent->id}}">{{ $parent->Father_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </fieldset>
            <br>
            <hr>
            <br>
            <div class="flex items-center justify-end w-full gap-2">
                <x-button accesskey="s" class="primary" type="submit"> {{ trans('General.Submit') }}</x-button>
            </div>
        </form>

    </div>
</div>

@push('scripts')
<script>
    const birthDateInput = document.querySelector('input[name="birth_date"]');
    const checkBirthInput = document.querySelector('input[name="check_birth"]');

    const makeDate = () => {
        const date = new Date();
        date.setMonth(9);
        date.setDate(1);
        return date;
    };

    birthDateInput.addEventListener('change', () => {
        const birthDate = new Date(birthDateInput.value);
        const checkDate = new Date(makeDate());
        checkBirthInput.value = Math.ceil((checkDate - birthDate) / (1000 * 3600 * 24));
    });
</script>
<script>
    const classrooms = document.querySelector('#classrooms');
    const grades=document.querySelector('#grades')
    grades.addEventListener('change', async () => {

        classrooms.innerHTML = '<option>{{trans('student.choose_classroom')}}</option>';
        const response = await fetch(`/ajax/get_classRooms/${grades.value}`)
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
