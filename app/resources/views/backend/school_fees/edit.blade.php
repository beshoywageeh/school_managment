<x-modal can="schoolfees-edit" title="{{ trans('fees.title') }}" icon="pencil" id="school_fee_edit" size="xl" variant="warning">
    <slot>
        <form id="school_fee_edit" class="max-w-full" action="{{ route('school-fees.update', $fee->id) }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $fee->id }}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fees.title') }}</label>
                    <input type="text" name="name" value="{{ $fee->title }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fees.amount') }}</label>
                    <input type="number" name="amount" value="{{ $fee->amount }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" />
                </div>
            </div>
            <x-select name="grade_id" label="{{ trans('student.choose_grade') }}" id="grades">
                <option>{{ trans('student.choose_grade') }}</option>
                @foreach ($grades as $grade)
                    <option value="{{ $grade->id }}" @selected($fee->grade_id == $grade->id)>{{ $grade->name }}</option>
                @endforeach
            </x-select>
            <x-select name="classroom_id" label="{{ trans('student.choose_classroom') }}" id="classrooms">
                <option value="{{ $fee->classroom_id }}" selected>{{ $fee->classroom->name }}</option>
            </x-select>
            <x-select name="academic_year_id" label="{{ trans('fees.academic_year') }}">
                <option value="{{ $fee->academic_year_id }}" selected>{{ $fee->year->view }}</option>
                @forelse ($academic_years as $year)
                    <option value="{{ $year['id'] }}">{{ $year['academic_year'] }}</option>
                @empty
                    <option>{{ trans('fees.no_academic_year') }}</option>
                @endforelse
            </x-select>
            <x-textarea name="description" label="{{ trans('fees.desc') }}">{{ $fee->description }}</x-textarea>
        </form>
    </slot>
</x-modal>
{{--
@extends('layouts.app')
@section('title')
    {{ trans('fees.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h4 class="text-lg font-bold text-gray-800 mb-4">{{ trans('fees.title') }} | {{ trans('general.edit') }}</h4>
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('school-fees.update', $school_fee->id) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $school_fee->id }}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fees.desc') }}</label>
                    <input type="text" name="description" value="{{ $school_fee->description }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fees.amount') }}</label>
                    <input type="number" name="amount" value="{{ $school_fee->amount }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.choose_grade') }}</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" name="grade_id" id="grades">
                        <option>{{ trans('student.choose_grade') }}</option>
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}" @selected($school_fee->grade_id == $grade->id)>{{ $grade->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.choose_classroom') }}</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" name="classroom_id" id="classrooms">
                        <option value="{{ $school_fee->classroom_id }}" selected>{{ $school_fee->classroom->name }}</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fees.academic_year') }}</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" name="academic_year_id">
                        <option value="{{ $school_fee->academic_year_id }}" selected>{{ $school_fee->year->view }}</option>
                        @forelse ($academic_years as $year)
                            <option value="{{ $year['id'] }}">{{ $year['academic_year'] }}</option>
                        @empty
                            <option>{{ trans('fees.no_academic_year') }}</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <hr class="my-6 border-gray-200">
            <div class="flex justify-end">
                <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium" type="submit">
                    {{ trans('general.Submit') }}
                </button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            const classrooms = document.querySelector('#classrooms');
            const grades = document.querySelector('#grades')
            grades.addEventListener('change', async () => {
                classrooms.innerHTML = '<option>{{ trans('student.choose_classroom') }}</option>';
                const response = await fetch(`/ajax/get-class-rooms-fee/${grades.value}`)
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
@endsection --}}
