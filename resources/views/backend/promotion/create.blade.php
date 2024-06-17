@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('promotions.title') }}
@endsection
@section('content')
    <div class="mb-4 row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row card-title">
                        <div class="col">
                            <h4>{{ trans('general.new') }}</h4>
                        </div>
                    </div>
                    <form id="form-with-multiple-column" class="max-w-full" action="{{ route('promotion.store') }}"
                        method="post">
                        @csrf

                        <fieldset class=''>
                            <legend class='m-auto text-center text-danger'>{{ trans('promotions.old') }}</legend>
                            <div class="row">
                                <div class="col">
                                    <label>{{ trans('promotions.from_gradename') }}</label>

                                    <select class="custom-select" id="old_grade" name="old_grade">
                                        <option selected value="">{{ trans('promotions.from_gradename') }}</option>
                                        @foreach ($grades as $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">{{ trans('promotions.from_classroom') }}</label>
                                    <select class="custom-select" id="old_class" name="old_class">
                                        <option selected value="">{{ trans('promotions.from_classroom') }}</option>

                                    </select>
                                </div>

                            </div>

                        </fieldset>
                        <hr>
                        <fieldset class=''>
                            <legend class='m-auto text-center text-danger'>{{ trans('promotions.new') }}</legend>
                            <div class="row">
                                <div class="col">
                                    <label>{{ trans('promotions.to_gradename') }}</label>

                                    <select class="custom-select" id="new_grade" name="new_grade">
                                        <option selected value="">{{ trans('promotions.to_gradename') }}</option>

                                        @foreach ($grades as $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">{{ trans('promotions.to_classroom') }}</label>
                                    <select class="custom-select" id="new_class" name="new_class">

                                        <option selected value="">{{ trans('promotions.to_classroom') }}</option>
                                    </select>
                                </div>

                            </div>
                        </fieldset>

                        <hr>
                        <div class="row">
                            <div class="col"></div>
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
            const old_classrooms = document.querySelector('#old_class');
            const old_grades = document.querySelector('#old_grade')
            old_grades.addEventListener('change', async () => {

                old_classrooms.innerHTML = '<option>{{ trans('student.choose_classroom') }}</option>';
                const response = await fetch(`/ajax/get_classRooms/${old_grades.value}`)
                const data = await response.json();
                data.forEach(class_rooms => {
                    const option = document.createElement('option');
                    option.value = class_rooms.id;
                    option.text = class_rooms.name;
                    old_classrooms.appendChild(option);
                });

            });
        </script>
        <script>
            const new_classrooms = document.querySelector('#new_class');
            const new_grades = document.querySelector('#new_grade')
            new_grades.addEventListener('change', async () => {

                new_classrooms.innerHTML = '<option>{{ trans('student.choose_classroom') }}</option>';
                const response = await fetch(`/ajax/get_classRooms/${new_grades.value}`)
                const data = await response.json();
                data.forEach(class_rooms => {
                    const option = document.createElement('option');
                    option.value = class_rooms.id;
                    option.text = class_rooms.name;
                    new_classrooms.appendChild(option);
                });

            });
        </script>
    @endpush
@endsection
