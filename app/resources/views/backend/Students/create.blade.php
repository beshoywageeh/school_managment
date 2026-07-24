@extends('layouts.app')
@section('title')
    {{ trans('student.title') }} | {{ trans('general.new') }}
@endsection
@section('content')
    @include('backend.msg')
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('student.student_info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <x-input type="text" name="name"
                            value="{{ old('name') }}">{{ trans('student.name') }}
                        </x-input>
                    </div>
                    <div>
                        <x-input type="date" name="birth_date"
                            value="{{ old('birth_date') }}">
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
                        <input type="text" value="{{ old('national_id') }}" name="national_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" id="national_id" maxlength="14"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        @error('national_id')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <x-select name="nationality" label="{{ trans('general.nationality') }}" id="nationality">
                        <option value="" selected disabled>{{ trans('general.nationality') }}
                        </option>
                        @foreach ($nationalitys as $nationality)
                            <option value="{{ $nationality->id }}">
                                {{ $nationality->name }}</option>
                        @endforeach
                    </x-select>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <x-input.gender-select name="gender" />
                    <x-input.religion-select/>


                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <x-select name="parent_id" label="{{ trans('student.parent') }}" class="tom-select">
                        @foreach ($parents as $parent)
                            <option value="{{ $parent->id }}">
                                {{ $parent->father_name }}</option>
                        @endforeach
                    </x-select>

                </div>
                <x-textarea name="address" label="{{ trans('student.address') }}" rows="5">{{ old('address') }}</x-textarea>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('student.study_info') }}</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-select name="grade_id" label="{{ trans('student.choose_grade') }}" id="grades">
                        <option> {{ trans('student.choose_grade') }}</option>
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}">
                                {{ $grade->name }}</option>
                        @endforeach
                    </x-select>
                    <x-select name="classroom_id" label="{{ trans('student.choose_classroom') }}" id="classrooms">
                        <option selected value="">{{ trans('student.choose_classroom') }}</option>
                    </x-select>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div>
                     <x-input.Student_Status />
                    </div>
                    <x-select name="academic_year" label="{{ trans('student.choose_acadmice') }}">
                        <option> {{ trans('student.choose_acadmice') }}</option>
                        @foreach ($acadmice_years as $acadmice_year)
                            <option value="{{ $acadmice_year->id }}">
                                {{ $acadmice_year->view }}</option>
                        @endforeach
                    </x-select>
                </div>
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
                        fetch("{{ URL::to('/ajax/get-class-rooms') }}/" + grade)
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
