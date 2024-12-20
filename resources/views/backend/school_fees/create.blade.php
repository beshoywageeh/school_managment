@extends('layouts.app')
@section('title')
    {{ trans('fees.title') }} | {{ trans('general.new') }}
@endsection
@section('content')
<div class="mb-4 row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row card-title">
                    <div class="col">
                        <h4 >{{ trans('general.new') }}</h4>
                    </div>
                </div>
                @include('backend.msg')
                <form id="form-with-multiple-column" class="max-w-full" action="{{ route('schoolfees.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <!-- Form Row: One -->
                        <div class="col">
                            <!-- Form Column: Username -->
                            <x-input name='title' class='' type='text'>{{ trans('fees.title') }}</x-input>
                        </div>
                        <div class="col">
                            <x-input name='amount' class='' type='number'>{{ trans('fees.amount') }}</x-input>
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
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label class="" for="form-horizontal-full-name">
                                {{ trans('student.choose_classroom') }}
                            </label>
                            <select class='custom-select select2' name="classroom_id[]" id="classrooms" multiple>
                                <option>{{ trans('student.choose_classroom') }}</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="" for="form-horizontal-full-name">
                                {{ trans('fees.academic_year') }}
                            </label>
                            <select class='custom-select' name="academic_year_id">
                                <option> {{ trans('fees.choose_academic_year') }}</option>
                                @forelse ($years as $year)
                                    <option value="{{ $year->id }}">{{ $year->view }}</option>
                                @empty
                                    <option>{{ trans('fees.no_academic_year') }}</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="" for="form-horizontal-full-name">
                                {{ trans('fees.desc') }}
                            </label>
                            <!-- Form Column: Username -->
                            <textarea class="form-control" name="description">{{ trans('fees.desc') }}</textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-md-right">
                        <button class="btn btn-success" type="submit">{{ trans('General.Submit') }}</button>
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
