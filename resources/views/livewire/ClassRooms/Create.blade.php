<div id="drawer-basic" class="drawer">
    <div class="drawer-header">
        <h5> {{ trans('Class_Rooms.New_Class_Room') }}</h5>
        <button type="button"
            class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
            data-dismiss="drawer">
            <i data-feather="x" width="1.5rem" height="1.5rem"></i>
        </button>
    </div>
    <form id="New_Class" wire:submit="CreateNewClassRoom" autocomplete="off">
        <div class="drawer-body">
            <div>
                <label class="my-2">{{ trans('Class_Rooms.choose_grade') }} </label>
                <select class="input" wire:model.live="grade_id">
                    <option selected>{{ trans('Class_Rooms.choose_grade') }}</option>
                    @foreach ($data['grades'] as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->Grade_Name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="my-2">{{ trans('Class_Rooms.New_Class_Rooms') }}</label>
                <input type='text' class='input' wire:model.live='Class_Name' />
            </div>
        </div>
        <div class="drawer-footer">
            <div class="flex justify-end gap-2">
                <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                    <span>{{ trans('general.close') }}</span>
                </button>

                <button data-dismiss="drawer" class="btn btn-primary">
                    <span>{{ trans('general.save') }}</span>
                </button>
            </div>
        </div>
    </form>
</div>
