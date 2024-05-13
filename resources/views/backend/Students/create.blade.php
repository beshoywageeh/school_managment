@extends('layouts.app')
@section('title')
{{trans('student.title')}} | {{trans('general.new')}}
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="flex justify-between mb-4">
            <h4 class="card-title">{{trans('student.title')}} | {{trans('general.new')}}</h4>
        </div>
        @include('backend.msg')
        <form action="{{route('Students.store')}}" method="post">
            @csrf
            <fieldset class='p-4 border-2 border-indigo-600 border-solid rounded'>
                <legend class='m-auto text-center text-muted'>{{trans('student.student_info')}}</legend>
                <div class="flex flex-col items-center w-full gap-1 md:flex-row md:gap-2">

                    <x-input type="text" name="student_name" value="{{old('student_name')}}">{{ trans('student.name') }}
                    </x-input>
                    <x-input type="date" class="input-date" value="{{old('birth_date')}}" name="birth_date">{{ trans('student.birth_date')
                        }}
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
                    <x-input type="text" value="{{old('national_id')}}" name="national_id">{{
                        trans('student.national_id') }}
                    </x-input>
                    <x-input type="date" value="{{old('join_date')}}" class="input-date" name="join_date">{{ trans('student.join_date')
                        }}
                    </x-input>
                    <x-input.gender-select >
                        </x-input.gender-sele>
                </div>
                <div class="flex flex-col items-center w-full gap-1 md:fkex-row md:gap-2">
                    <div class="w-full">
                        <lable>{{trans('student.address')}}</lable>
                        <textarea class="input" name="address" id="" cols="30" rows="5">{{old('address')}}</textarea>
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
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
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
                        <label for="parent" class="mb-1 label">{{trans('student.parent')}}</label>
                        <select name="parents" id="" class="w-full tom-select">
                            <option> {{trans('student.parent')}}</option>

                            @foreach ($parents as $parent)
                            <option value="{{$parent->id}}">{{ $parent->Father_Name }}</option>
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
                option.text = class_rooms.name;
                classrooms.appendChild(option);
            });

        });
    </script>
@endpush
@endsection
