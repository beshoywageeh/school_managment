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
                        <div class="row">
                            <div class="col">
                                <fieldset class='p-4 border rounded border-primary'>
                                    <legend class='m-auto text-center text-muted'>{{ trans('promotions.old') }}</legend>
                                    <div class="row">
                                        <div class="col">
                                            <label>{{ trans('promotions.from_gradename') }}</label>

                                            <select class="custom-select" id="old_grade" name="old_grade">
                                                <option selected value="">{{ trans('promotions.from_gradename') }}
                                                </option>
                                                @foreach ($grades as $grade)
                                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4 row">
                                        <div class="col">
                                            <label for="">{{ trans('promotions.from_classroom') }}</label>
                                            <select class="custom-select" id="old_class" name="old_class">
                                                <option selected value="">{{ trans('promotions.from_classroom') }}
                                                </option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="mt-4 row">
                                        <div class="col">
                                            <label for="">{{ trans('promotions.from_year') }}</label>
                                            <select class="custom-select" name="acc_from" id="">
                                                @forelse ($acc_year as $acc)
                                                    <option value="{{ $acc->id }}">{{ $acc->view }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col">
                                <fieldset class='p-4 border rounded border-primary'>
                                    <legend class='m-auto text-center text-muted'>{{ trans('promotions.new') }}</legend>
                                    <div class="row">
                                        <div class="col">
                                            <label>{{ trans('promotions.to_gradename') }}</label>

                                            <select class="custom-select" id="new_grade" name="new_grade">
                                                <option selected value="">{{ trans('promotions.to_gradename') }}
                                                </option>

                                                @foreach ($grades as $grade)
                                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4 row">
                                        <div class="col">
                                            <label for="">{{ trans('promotions.to_classroom') }}</label>
                                            <select class="custom-select" id="new_class" name="new_class">

                                                <option selected value="">{{ trans('promotions.to_classroom') }}
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="mt-4 row">
                                        <div class="col">
                                            <label for="">{{ trans('promotions.to_year') }}</label>
                                            <select class="custom-select" name="acc_to" id="">
                                                @forelse ($acc_year as $acc)
                                                    <option value="{{ $acc->id }}">{{ $acc->view }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
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
            $(document).ready(function() {
                $('#old_grade').on('change', function() {
                    $('#old_class').empty();

                    $('#old_class').append('<option>{{ trans('General.loading') }}</option>');
                    let grade = $(this).val();
                    if (grade) {
                        $.ajax({
                            url: "{{ URL::to('/ajax/get_classRooms') }}/" + grade,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('#old_class').empty();

                                $('#old_class').append(
                                    '<option selected disabled>{{ trans('student.choose_classroom') }}</option>'
                                );
                                $.each(data, function(key, value) {

                                    $('#old_class').append(
                                        `<option value="${value.id}">${value.name}</option>`
                                    );

                                });
                            },
                        });
                    };
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#new_grade').on('change', function() {
                    $('#new_class').empty();
                    $('#new_class').append('<option>{{ trans('General.loading') }}</option>');
                    let grade = $(this).val();
                    if (grade) {
                        $.ajax({
                            url: "{{ URL::to('/ajax/get_classRooms') }}/" + grade,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('#new_class').empty();

                                $('#new_class').append(
                                    '<option selected disabled>{{ trans('student.choose_classroom') }}</option>'
                                );
                                $.each(data, function(key, value) {

                                    $('#new_class').append(
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
