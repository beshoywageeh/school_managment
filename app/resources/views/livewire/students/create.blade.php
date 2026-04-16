<div>
    <div wire:ignore.self class="modal fade" id="Create_Student" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" style="min-width: 90%" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h6 class="">{{ trans('general.new') }}</h6>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form wire:submit.prevent="store">
                    <div class="modal-body p-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="row">
                            {{-- Left Side: Personal Information --}}
                            <div class="col-lg-7">
                                <div class="card shadow-none border">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title mb-0 text-primary"><i
                                                class="fas fa-user-graduate mr-2"></i>{{ trans('student.student_info') }}
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="student_name"><strong>{{ trans('student.name') }}</strong></label>
                                                    <input type="text" wire:model="student_name" class="form-control @error('student_name') is-invalid @enderror" id="student_name">
                                                    @error('student_name')
                                                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="birth_date"><strong>{{ trans('student.birth_date') }}</strong></label>
                                                    <input type="date" wire:model.live="birth_date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date">
                                                    @error('birth_date')
                                                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="check_birth"><strong>{{ trans('student.checkbirth_date') }}</strong></label>
                                                    <input type="text" wire:model="check_birth" disabled class="form-control" id="check_birth">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="national_id"><strong>{{ trans('student.national_id') }}</strong></label>
                                                    <input type="text" wire:model="national_id"
                                                        class="form-control @error('national_id') is-invalid @enderror"
                                                        id="national_id" minlength="14" maxlength="14"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                    @error('national_id')
                                                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <x-input.nationality wire:model="nationality" class="ignore" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <x-input.gender-select wire:model="gender" class="ignore" />
                                            </div>
                                            <div class="col-md-4">
                                                <x-input.Student_Status wire:model="std_status" class="ignore" />
                                            </div>
                                            <div class="col-md-4">
                                                <x-input.religion-select wire:model="religion" class="ignore" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="address"><strong>{{ trans('student.address') }}</strong></label>
                                            <textarea class="form-control @error('address') is-invalid @enderror" wire:model="address" id="address" rows="3"></textarea>
                                            @error('address')
                                                <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Right Side: Study Information --}}
                            <div class="col-lg-5">
                                <div class="card shadow-none border h-100">
                                    <div class="card-header bg-light">
                                        <h5 class="card-title mb-0 text-success"><i
                                                class="fas fa-school mr-2"></i>{{ trans('student.study_info') }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mb-4">
                                            <label for="grades"><strong>{{ trans('student.choose_grade') }}</strong></label>
                                            <select class="custom-select ignore @error('grade') is-invalid @enderror" wire:model.live="grade" id="grades">
                                                <option value=""> {{ trans('student.choose_grade') }}</option>
                                                @foreach ($grades as $grade_item)
                                                    <option value="{{ $grade_item->id }}">{{ $grade_item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('grade')
                                                <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="classrooms"><strong>{{ trans('student.choose_classroom') }}</strong></label>
                                            <select class="custom-select ignore @error('classroom') is-invalid @enderror" wire:model="classroom" id="classrooms" @if (count($this->newClassrooms) == 0) disabled @endif>
                                                <option value="">{{ trans('student.choose_classroom') }}</option>
                                                @foreach ($this->newClassrooms as $classroom_item)
                                                    <option value="{{ $classroom_item->id }}">{{ $classroom_item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('classroom')
                                                <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="parent_name_input"><strong>{{ trans('Parents.father-name') }}</strong></label>
                                            <input list="parents_list" type="text" wire:model.live.debounce.300ms="parent_name_input" class="form-control @error('parent_name_input') is-invalid @enderror" id="parent_name_input" placeholder="{{ trans('student.choose_parent') }}">
                                            <datalist id="parents_list">
                                                @foreach ($this->parents as $parent)
                                                    <option value="{{ $parent->Father_Name }}">
                                                @endforeach
                                            </datalist>
                                            @error('parent_name_input')
                                                <div class="mt-1 alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('general.Close') }}</button>
                        <button class="btn btn-primary px-5" type="submit" wire:loading.attr="disabled">
                            <span wire:loading.remove>
                                <i class="fas fa-save mr-1"></i> {{ trans('general.Submit') }}
                            </span>
                            <span wire:loading>
                                <i class="fas fa-spinner fa-spin mr-1"></i> {{ trans('general.loading') }}
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
