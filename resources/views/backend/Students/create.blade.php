@extends('layouts.app')
@section('title')
    {{ trans('student.title') }} | {{ trans('general.new') }}
@endsection
@section('content')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ trans('student.title') }} | {{ trans('general.new') }}</h4>
                    <form action="{{ route('Students.store') }}" method="post">
                        @csrf
                        <fieldset class=''>
                            <legend class='m-auto text-center text-muted'>{{ trans('student.student_info') }}</legend>
                            <div class="row">
                                <div class="col">
                                    <x-input type="text" name="student_name"
                                        value="{{ old('student_name') }}">{{ trans('student.name') }}
                                    </x-input>
                                </div>
                                <div class="col">
                                    <x-input type="date" name="birth_date" class="form-control" value="{{old('birth_date')}}">
                                        {{ trans('student.birth_date') }}
                                    </x-input>
                                </div>

                                <div class="col">
                                    <label for="check_birth"
                                        class="">{{ trans('student.checkbirth_date') }}</label>
                                    <div class="input-group" style="flex-direction: row-reverse">
                                        <span class="input-group-text">{{ trans('general.day') }}</span>
                                        <input type="text" disabled name="check_birth" class="form-control">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <x-input type="text" value="{{ old('national_id') }}"
                                        name="national_id">{{ trans('student.national_id') }}
                                    </x-input>
                                </div>
                                <div class="col">
                                    <x-input type="date" name="join_date" class="form-control" value="{{old('join_date')}}">
                                        {{ trans('student.join_date') }}
                                    </x-input>
                                </div>

                                <x-input.gender-select/>
                                <x-input.Student_Status/>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>{{ trans('student.address') }}</label>
                                    <textarea class="form-control" name="address" id="" rows="5">{{ old('address') }}</textarea>
                                </div>
                            </div>
                        </fieldset>

                        <hr>
                        <fieldset class=''>
                            <legend class='m-auto text-center text-muted'>{{ trans('student.study_info') }}</legend>
                            <div class="row">

                                <div class="col">
                                    <label class="" for="form-horizontal-full-name">
                                        {{ trans('student.choose_grade') }}
                                    </label>
                                    <select class='custom-select' name="grade" id="grades">
                                        <option> {{ trans('student.choose_grade') }}</option>
                                        @foreach ($grades as $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="" for="form-horizontal-full-name">
                                        {{ trans('student.choose_classroom') }}
                                    </label>
                                    <select class='custom-select' name="class_room" id="classrooms">
                                        <option>{{ trans('student.choose_classroom') }}</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="parent" class="">{{ trans('student.parent') }}</label>
                                    <select name="parents" id="" class="custom-select select2">
                                        <option> {{ trans('student.parent') }}</option>

                                        @foreach ($parents as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->Father_Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <hr>
                        <div class="row">
                            <div class="col text-md-right">

                                <x-button accesskey="s" class="primary" type="submit">
                                    {{ trans('General.Submit') }}</x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const birthDateInput = document.querySelector('input[name="birth_date"]');
                const checkBirthInput = document.querySelector('input[name="check_birth"]');

                if (birthDateInput && checkBirthInput) {
                    const makeDate = () => {
                        const date = new Date();
                        date.setFullYear(new Date().getFullYear()); // Set to current year
                        date.setMonth(9); // October (months are 0-indexed)
                        date.setDate(1);
                        return date;
                    };

                    birthDateInput.addEventListener('change', () => {
                        const birthDate = new Date(birthDateInput.value);
                        console.log(birthDate);
                        const checkDate = new Date(makeDate());
                        checkBirthInput.value = Math.ceil((checkDate - birthDate) / (1000 * 3600 * 24));
                    });
                } else {
                    console.error('Input elements not found');
                }
            });
        </script>
        <script>
            const classrooms = document.querySelector('#classrooms');
            const grades = document.querySelector('#grades')
            grades.addEventListener('change', async () => {

                classrooms.innerHTML = '<option>{{ trans('student.choose_classroom') }}</option>';
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
