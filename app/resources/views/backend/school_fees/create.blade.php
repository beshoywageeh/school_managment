<x-modal can="schoolfees-create" title="{{ trans('fees.title') }}" titleButton="{{trans('general.new')}}" icon="plus" id="school_fee_create" size="xl">
    <slot>
        <form action="{{ route('school_fees.store') }}" method="post" id="school_fee_create">
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
                    <x-select name="grade_id" label="{{ trans('student.choose_grade') }}" id="grades">
                        <option value="" selected disabled>{{ trans('student.choose_grade') }}</option>
                        @foreach ($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                        @endforeach
                    </x-select>
                    <x-select name="classroom_id" label="{{ trans('student.choose_classroom') }}" id="classrooms">
                        <option disabled>{{ trans('student.choose_classroom') }}</option>
                    </x-select>
                    <x-select name="academic_year_id" label="{{ trans('fees.academic_year') }}">
                        <option value="" selected disabled>{{ trans('fees.choose_academic_year') }}
                        </option>
                        @forelse ($years as $year)
                            <option value="{{ $year->id }}">{{ $year->view }}</option>
                        @empty
                            <option disabled>{{ trans('fees.no_academic_year') }}</option>
                        @endforelse
                    </x-select>
                </div>

                <x-textarea name="description" label="{{ trans('fees.desc') }}" id="description" rows="3" placeholder="{{ trans('fees.desc') }}"></x-textarea>
            </div>

        </form>
    </slot>
</x-modal>
