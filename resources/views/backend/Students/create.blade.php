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
                        <fieldset class='p-4 border rounded border-primary'>
                            <legend class='m-auto text-center text-muted'>{{ trans('student.student_info') }}</legend>
                            <div class="row">
                                <div class="col">
                                    <x-input type="text" name="student_name"
                                        value="{{ old('student_name') }}">{{ trans('student.name') }}
                                    </x-input>
                                </div>
                                <div class="col">
                                    <x-input type="date" name="birth_date" class="form-control"
                                        value="{{ old('birth_date') }}">
                                        {{ trans('student.birth_date') }}
                                    </x-input>
                                </div>

                                <div class="col">
                                    <label for="check_birth" class="">{{ trans('student.checkbirth_date') }}</label>
                                    <input type="text" disabled name="check_birth" class="form-control">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="national_id">{{ trans('student.national_id') }}</label>
                                        <input type="text" value="{{ old('national_id') }}" name="national_id"
                                            class="form-control" id="national_id" maxlength="14"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        @error('national_id')
                                            <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <x-input.nationality />
                                </div>
                                <x-input.gender-select />
                                <x-input.Student_Status />

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>{{ trans('student.address') }}</label>
                                    <textarea class="form-control" name="address" id="" rows="5">{{ old('address') }}</textarea>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <br>
                        <fieldset class='p-4 border rounded border-primary'>
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
            document.addEventListener('DOMContentLoaded', function() {
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
                        const checkDate = new Date(makeDate());
                        const diffTime = Math.abs(checkDate - birthDate);
                        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                        const years = Math.floor(diffDays / 365);
                        const months = Math.floor((diffDays % 365) / 30);
                        const days = (diffDays % 365) % 30;
                        checkBirthInput.value = `${years} سنه, ${months} شهر, ${days} يوم`;
                    });
                } else {
                    console.error('Input elements not found');
                }
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#grades').on('change', function() {
                    classrooms.innerHTML = '<option>{{ trans('General.loading') }}</option>';
                    let grade = $(this).val();
                    if (grade) {
                        $.ajax({
                            url: "{{ URL::to('/ajax/get_classRooms') }}/" + grade,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('#classrooms').empty();
                                $('#classrooms').append(
                                    '<option selected disabled>{{ trans('student.choose_classroom') }}</option>'
                                );
                                $.each(data,function(key, value) {
                                    console.log(key);
                                    console.log(value.name);
                                    $('#classrooms').append(
                                        `<option value="${value.id}">${value.name}</option>`);

                                });
                            },
                        });
                    };
                });
            });
        </script>
    @endpush
@endsection
