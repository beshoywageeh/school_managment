@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('promotions.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('general.new') }}</h4>
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('promotion.store') }}"
            method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 border border-blue-300 rounded-lg">
                    <legend class="text-center text-gray-500 mb-4">{{ trans('promotions.old') }}</legend>
                    <div class="space-y-4">
                        <x-select name="old_grade" label="{{ trans('promotions.from_gradename') }}" id="old_grade">
                            <option selected value="">{{ trans('promotions.from_gradename') }}
                            </option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                            @endforeach
                        </x-select>
                        <x-select name="old_class" label="{{ trans('promotions.from_classroom') }}" id="old_class">
                            <option selected value="">{{ trans('promotions.from_classroom') }}
                            </option>
                        </x-select>
                        <x-select name="acc_from" label="{{ trans('promotions.from_year') }}">
                            @forelse ($acc_year as $acc)
                                <option value="{{ $acc->id }}">{{ $acc->view }}</option>
                            @empty
                            @endforelse
                        </x-select>
                    </div>
                </div>
                <div class="p-4 border border-blue-300 rounded-lg">
                    <legend class="text-center text-gray-500 mb-4">{{ trans('promotions.new') }}</legend>
                    <div class="space-y-4">
                        <x-select name="new_grade" label="{{ trans('promotions.to_gradename') }}" id="new_grade">
                            <option selected value="">{{ trans('promotions.to_gradename') }}
                            </option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                            @endforeach
                        </x-select>
                        <x-select name="new_class" label="{{ trans('promotions.to_classroom') }}" id="new_class">
                            <option selected value="">{{ trans('promotions.to_classroom') }}
                            </option>
                        </x-select>
                        <x-select name="acc_to" label="{{ trans('promotions.to_year') }}">
                            @forelse ($acc_year as $acc)
                                <option value="{{ $acc->id }}">{{ $acc->view }}</option>
                            @empty
                            @endforelse
                        </x-select>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200">
            <div class="flex justify-end">
                <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#old_grade').addEventListener('change', function() {
                    const oldClass = document.querySelector('#old_class');
                    oldClass.innerHTML = '<option>{{ trans('general.loading') }}</option>';
                    const grade = this.value;
                    if (grade) {
                        fetch("{{ URL::to('/ajax/get-class-rooms') }}/" + grade)
                            .then(response => response.json())
                            .then(data => {
                                oldClass.innerHTML =
                                    '<option selected disabled>{{ trans('student.choose_classroom') }}</option>';
                                data.forEach(function(value) {
                                    const opt = document.createElement('option');
                                    opt.value = value.id;
                                    opt.textContent = value.name;
                                    oldClass.appendChild(opt);
                                });
                            })
                            .catch(error => console.error('Error fetching classrooms:', error));
                    }
                });
                document.querySelector('#new_grade').addEventListener('change', function() {
                    const newClass = document.querySelector('#new_class');
                    newClass.innerHTML = '<option>{{ trans('general.loading') }}</option>';
                    const grade = this.value;
                    if (grade) {
                        fetch("{{ URL::to('/ajax/get-class-rooms') }}/" + grade)
                            .then(response => response.json())
                            .then(data => {
                                newClass.innerHTML =
                                    '<option selected disabled>{{ trans('student.choose_classroom') }}</option>';
                                data.forEach(function(value) {
                                    const opt = document.createElement('option');
                                    opt.value = value.id;
                                    opt.textContent = value.name;
                                    newClass.appendChild(opt);
                                });
                            })
                            .catch(error => console.error('Error fetching classrooms:', error));
                    }
                });
            });
        </script>
    @endpush
@endsection