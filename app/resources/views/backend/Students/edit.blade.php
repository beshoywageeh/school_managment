@extends('layouts.app')
@section('title')
    {{ trans('student.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
    <form action="{{ route('students.update', $student->id) }}" method="post">
        <input type="hidden" name="id" value="{{ $student->id }}">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('student.student_info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <x-input type="text" name="student_name"
                            value="{{ $student->name }}">{{ trans('student.name') }}
                        </x-input>
                    </div>
                    <div>
                        <x-input type="date" name="birth_date"
                            value="{{ $student->birth_date }}">
                            {{ trans('student.birth_date') }}
                        </x-input>
                    </div>
                    <div class="md:col-span-2">
                        <label for="check_birth" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.checkbirth_date') }}</label>
                        <input type="text" disabled name="check_birth" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-500">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="national_id" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.national_id') }}</label>
                        <input type="text" value="{{ $student->national_id }}" name="national_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" id="national_id" maxlength="14"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        @error('national_id')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <x-select name="nationality" label="{{ trans('general.nationality') }}" id="nationality">
                        <option value="" selected disabled>{{ trans('general.nationality') }}
                        </option>
                        @foreach (\App\Models\nationality::all() as $nationality)
                            <option value="{{ $nationality->id }}" @selected(old('nationality', $student->nationality_id) == $nationality->id)>
                                {{ $nationality->name }}</option>
                        @endforeach
                    </x-select>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <x-input.gender-select name="gender" />
                    <x-input.Student_Status />
                </div>
                <x-textarea name="address" label="{{ trans('student.address') }}" rows="5">{{ $student->address }}</x-textarea>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('student.study_info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-select name="grade" label="{{ trans('student.choose_grade') }}" id="grades">
                        <option> {{ trans('student.choose_grade') }}</option>
                        @foreach ($grades as $grade)
                            <option @selected($student->grade_id == $grade->id) value="{{ $grade->id }}">
                                {{ $grade->name }}</option>
                        @endforeach
                    </x-select>
                    <x-select name="class_room" label="{{ trans('student.choose_classroom') }}" id="classrooms">
                        <option selected value="{{ $student->classroom_id }}">{{ $student->classroom->name }}
                        </option>
                    </x-select>
                </div>
                <x-select name="parents" label="{{ trans('student.parent') }}">
                    <option> {{ trans('student.parent') }}</option>

                    @foreach ($parents as $parent)
                        <option @selected($student->parent_id == $parent->id) value="{{ $parent->id }}">
                            {{ $parent->father_name }}</option>
                    @endforeach
                </x-select>
                <div class="mt-6 flex justify-end">
                    <x-button accesskey="s" class="primary" type="submit">
                        {{ trans('general.Submit') }}</x-button>
                </div>
            </div>
        </div>

    </form>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#grades').addEventListener('change', function() {
                    const classrooms = document.querySelector('#classrooms');
                    classrooms.innerHTML = '<option>{{ trans('general.loading') }}</option>';
                    const grade = this.value;
                    if (grade) {
                        fetch("{{ URL::to('/ajax/get-class-rooms') }}/ " + grade)
                            .then(response => response.json())
                            .then(data => {
                                classrooms.innerHTML =
                                    '<option selected disabled>{{ trans('student.choose_classroom') }}</option>';
                                data.forEach(function(value) {
                                    const opt = document.createElement('option');
                                    opt.value = value.id;
                                    opt.textContent = value.name;
                                    classrooms.appendChild(opt);
                                });
                            })
                            .catch(error => console.error('Error fetching classrooms:', error));
                    }
                });
            });
        </script>
    @endpush
@endsection
