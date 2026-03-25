<div class="modal fade" id="CreateSchoolFee" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">{{ trans('general.new') }}</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-with-multiple-column" action="{{ route('school-fees.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    @include('backend.msg')
                    <div class="row">
                        <div class="col-md-6">
                            <x-input name='title' type='text'>{{ trans('fees.title') }}</x-input>
                        </div>
                        <div class="col-md-6">
                            <x-input name='amount' type='number'>{{ trans('fees.amount') }}</x-input>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="grades">{{ trans('student.choose_grade') }}</label>
                            <select class="custom-select" name="grade_id" id="grades">
                                <option value="" selected disabled>{{ trans('student.choose_grade') }}</option>
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="classrooms">{{ trans('student.choose_classroom') }}</label>
                            <select class="custom-select" name="classroom_id" id="classrooms">
                                <option disabled>{{ trans('student.choose_classroom') }}</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>{{ trans('fees.academic_year') }}</label>
                            <select class="custom-select" name="academic_year_id">
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

                    <div class="row mt-3">
                        <div class="col-12">
                            <label for="description">{{ trans('fees.desc') }}</label>
                            <textarea class="form-control" name="description" id="description" rows="3"
                                placeholder="{{ trans('fees.desc') }}"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
