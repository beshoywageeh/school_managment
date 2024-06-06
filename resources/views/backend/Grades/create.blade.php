<div class="modal fade" id="CreateGrade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">

                        <h6>{{ trans('general.new') }}</h6>


                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
            <form action="{{ route('grade.store') }}" method="POST">
                @csrf
                <div class="modal-body">


                            <x-input name='Grade_Name' class='' type='text' value='Grade_Name'>{{ trans('grades.name') }}</x-input>


                            <div class="form-group">
                                <label for="exampleFormControlSelect2">{{ trans('Grades.select_res') }}</label>
                                <select multiple="" name="user_id[]" class="form-control" id="tom-select">
                                    @foreach ($data['users'] as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">{{ trans('general.Submit') }}</button>
                    <button class="btn btn-secondary" data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                </div>
            </form>


        </div>
    </div>
</div>
