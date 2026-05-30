<div class="modal" id="CreateSchoolFee" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="relative flex flex-col w-full bg-white rounded-lg shadow-xl border-0">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800">{{ trans('general.new') }}</h3>
                <button type="button" class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100" data-dismiss="modal">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form id="form-with-multiple-column" action="{{ route('school_fees.store') }}" method="post">
                @csrf
                <div class="p-6">
                    @include('backend.msg')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <x-input name='title' type='text'>{{ trans('fees.title') }}</x-input>
                        </div>
                        <div>
                            <x-input name='amount' type='number'>{{ trans('fees.amount') }}</x-input>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <label for="grades" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.choose_grade') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="grade_id" id="grades">
                                <option value="" selected disabled>{{ trans('student.choose_grade') }}</option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="classrooms" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.choose_classroom') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="classroom_id" id="classrooms">
                                <option disabled>{{ trans('student.choose_classroom') }}</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fees.academic_year') }}</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="academic_year_id">
                                <option value="" selected disabled>{{ trans('fees.choose_academic_year') }}
                                </option>
                                @forelse ($years as $year)
                                    <option value="{{ $year->id }}">{{ $year->view }}</option>
                                @empty
                                    <option disabled>{{ trans('fees.no_academic_year') }}</option>
                                @endforelse
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">{{ trans('fees.desc') }}</label>
                        <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" name="description" id="description" rows="3"
                            placeholder="{{ trans('fees.desc') }}"></textarea>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>