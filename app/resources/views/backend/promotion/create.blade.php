@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('promotions.title') }}
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h4 class="text-lg font-semibold text-gray-800 mb-4">{{ trans('general.new') }}</h4>
        <form id="form-with-multiple-column" class="max-w-full" action="{{ route('promotion.store') }}"
            method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 border border-blue-300 rounded-lg">
                    <legend class="text-center text-gray-500 mb-4">{{ trans('promotions.old') }}</legend>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('promotions.from_gradename') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" id="old_grade" name="old_grade">
                                <option selected value="">{{ trans('promotions.from_gradename') }}
                                </option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('promotions.from_classroom') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" id="old_class" name="old_class">
                                <option selected value="">{{ trans('promotions.from_classroom') }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('promotions.from_year') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="acc_from" id="">
                                @forelse ($acc_year as $acc)
                                    <option value="{{ $acc->id }}">{{ $acc->view }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="p-4 border border-blue-300 rounded-lg">
                    <legend class="text-center text-gray-500 mb-4">{{ trans('promotions.new') }}</legend>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('promotions.to_gradename') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" id="new_grade" name="new_grade">
                                <option selected value="">{{ trans('promotions.to_gradename') }}
                                </option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('promotions.to_classroom') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" id="new_class" name="new_class">
                                <option selected value="">{{ trans('promotions.to_classroom') }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('promotions.to_year') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="acc_to" id="">
                                @forelse ($acc_year as $acc)
                                    <option value="{{ $acc->id }}">{{ $acc->view }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200">
            <div class="flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#old_grade').on('change', function() {
                    $('#old_class').empty();

                    $('#old_class').append('<option>{{ trans('general.loading') }}</option>');
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
                    $('#new_class').append('<option>{{ trans('general.loading') }}</option>');
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