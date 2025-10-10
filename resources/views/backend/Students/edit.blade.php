@extends('layouts.app')
@section('title')
    {{ trans('student.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
    <form action="{{ route('Students.update', 'test') }}" method="post">
        <input type="hidden" name="id" value="{{ $student->id }}">
        @csrf
        <div class="row mb-30">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ trans('student.student_info') }}</h4>
                        <div class="row">
                            <div class="col">
                                <x-input type="text" name="student_name"
                                    value="{{ $student->name }}">{{ trans('student.name') }}
                                </x-input>
                            </div>
                            <div class="col">
                                <x-input type="date" name="birth_date" class="form-control"
                                    value="{{ $student->birth_date }}">
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
                                    <input type="text" value="{{ $student->national_id }}" name="national_id"
                                        class="form-control" id="national_id" maxlength="14"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    @error('national_id')
                                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <label for="nationality" class="">{{ trans('general.nationality') }}</label>
                                    <select id="nationality" class="custom-select select2" name="nationality">
                                        <option value="" selected disabled>{{ trans('general.nationality') }}</option>
                                        @foreach (\App\Models\nationality::all() as $nationality)
                                            <option value="{{ $nationality->id }}" @selected(old('nationality', $student->nationality_id) == $nationality->id)>
                                                {{ $nationality->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('nationality')
                                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <x-input.gender-select name="gender" />
                            <x-input.Student_Status />
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>{{ trans('student.address') }}</label>
                                <textarea class="form-control" name="address" id="" rows="5">{{ $student->address }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ trans('student.study_info') }}</h4>
                        <div class="row">

                            <div class="col">
                                <label class="" for="form-horizontal-full-name">
                                    {{ trans('student.choose_grade') }}
                                </label>
                                <select class='custom-select' name="grade" id="grades">
                                    <option> {{ trans('student.choose_grade') }}</option>
                                    @foreach ($grades as $grade)
                                        <option @selected($student->grade_id == $grade->id) value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label class="" for="form-horizontal-full-name">
                                    {{ trans('student.choose_classroom') }}
                                </label>
                                <select class='custom-select' name="class_room" id="classrooms">
                                    <option selected value="{{ $student->classroom_id }}">{{ $student->classroom->name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="parent" class="">{{ trans('student.parent') }}</label>
                                <select name="parents" id="" class="custom-select select2">
                                    <option> {{ trans('student.parent') }}</option>

                                    @foreach ($parents as $parent)
                                        <option @selected($student->parent_id == $parent->id) value="{{ $parent->id }}">{{ $parent->Father_Name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-md-right">

                                <x-button accesskey="s" class="primary btn-block" type="submit">
                                    {{ trans('general.Submit') }}</x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </form>

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
                        console.log(checkDate);
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
                    classrooms.innerHTML = '<option>{{ trans('general.loading') }}</option>';
                    let grade = $(this).val();
                    if (grade) {
                        $.ajax({
                            url: "{{ URL::to('/ajax/get_classRooms') }}" + grade,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('#classrooms').empty();
                                $('#classrooms').append(
                                    '<option selected disabled>{{ trans('student.choose_classroom') }}</option>'
                                );
                                $.each(data, function(key, value) {
                                    console.log(key);
                                    console.log(value.name);
                                    $('#classrooms').append(
                                        `<option value="${value.id}">${value.name}</option>`
                                    );

                                });
                            },
                        });
                    };
                });
            });
        </script>
    @endpush
@endsection