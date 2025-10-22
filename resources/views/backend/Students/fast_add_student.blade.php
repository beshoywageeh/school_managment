<div class="modal fade" id="fastadd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h6 class="">{{ trans('general.new') }}</h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form >
                @csrf
                <div class="modal-body">
                    <div class="row">
                       <div class="col">
                            <x-input type="text" name="student_name"
                                value="{{ old('student_name') }}">{{ trans('student.name') }}
                            </x-input>
                        </div>
                        <div class="col">
                            <!-- Form Coumn: Username -->
                            <x-input name='Father_Name' value="{{ old('Father_Name') }}" class=''
                                type='text'>{{ trans('Parents.Father_Name') }}</x-input>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col">
                            <x-input type="date" name="birth_date" class="form-control"
                                value="{{ old('birth_date') }}">
                                {{ trans('student.birth_date') }}
                            </x-input>
                        </div>

                        <div class="col">
                            <label for="check_birth" class="">{{ trans('student.checkbirth_date') }}</label>
                            <input type="text" disabled name="check_birth" class="form-control">

                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <x-input.Student_Status />

                        </div>

                        <div class="col">
                            <label class="" for="form-horizontal-full-name">
                                {{ trans('student.choose_grade') }}
                            </label>
                            <select class='custom-select' name="grade" id="grades">
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
                            <select class='custom-select' name="class_room" id="classrooms">
                                <option>{{ trans('student.choose_classroom') }}</option>
                            </select>
                        </div>
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
