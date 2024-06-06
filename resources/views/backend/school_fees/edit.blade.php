@extends('layouts.app')
@section('title')
    {{ trans('fees.title') }} | {{ trans('general.edit') }}
@endsection
@section('content')
<div class="mb-4 row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row card-title">
                    <div class="col">
                        <h4 >{{ trans('fees.title') }} | {{ trans('general.edit') }}</h4>
                    </div>
                </div>
                <form id="form-with-multiple-column" class="max-w-full" action="{{ route('schoolfees.update','test') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $school_Fee->id }}">
                    <div class="row">
                        <!-- Form Row: One -->
                        <div class="col">
                            <!-- Form Column: Username -->
                            <x-input name='description' value="{{ $school_Fee->description }}" class='' type='text'>{{ trans('fees.desc') }}</x-input>
                        </div>
                        <div class="col">
                            <x-input name='amount' class='' value="{{ $school_Fee->amount }}" type='number'>{{ trans('fees.amount') }}</x-input>
                        </div>
                    </div>
                        <!-- Form Row: Two -->
                    <div class="row">
                        <div class="col">
                            <label class="" for="form-horizontal-full-name">
                                {{ trans('student.choose_grade') }}
                            </label>
                            <select class='custom-select' name="grade_id" id="grades">
                                <option> {{ trans('student.choose_grade') }}</option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}" @selected( $school_Fee->grade_id == $grade->id)>{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label class="" for="form-horizontal-full-name">
                                {{ trans('student.choose_classroom') }}
                            </label>
                            <select class='custom-select' name="classroom_id" id="classrooms">

                                <option value="{{ $school_Fee->classroom_id }}" selected>{{ $school_Fee->classroom->name }}</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="" for="form-horizontal-full-name">
                                {{ trans('fees.academic_year') }}
                            </label>
                            <select class='custom-select' name="academic_year_id">
                                <option value="{{$school_Fee->academic_year_id}}" selected>{{$school_Fee->academic_year_formated()}}</option>
                                @forelse ($academic_years as $year)
                                    <option value="{{ $year['id'] }}">{{ $year['academic_year'] }}</option>
                                @empty
                                    <option>{{ trans('fees.no_academic_year') }}</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-md-right">
                        <button class="button" type="submit">{{ trans('General.Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    @push('scripts')
        <script>
            const classrooms = document.querySelector('#classrooms');
            const grades = document.querySelector('#grades')
            grades.addEventListener('change', async () => {

                classrooms.innerHTML = '<option>{{ trans('student.choose_classroom') }}</option>';
                const response = await fetch(`/ajax/get_classRooms_fee/${grades.value}`)
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
