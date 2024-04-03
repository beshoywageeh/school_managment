<div id="Create_Grade" class="drawer">
    <div class="drawer-header">
        <h5>{{trans('grade.grade_title')}}</h5>
        <button type="button"
            class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
            data-dismiss="drawer">
            <i data-feather="x" width="1.5rem" height="1.5rem"></i>
        </button>
    </div>
    <form id="New_Grade" wire:submit="CreateNewGrade" autocomplete="off">
        <div class="drawer-body">
            <div>
                <label for="" class="mb-2">{{trans('grade.grade_name')}}</label>
                <input type="text" wire:model='Grade_Name' class="input" placeholder="{{trans('grade.grade_name')}}" />

            </div>
        </div>
        <div class="drawer-footer">
            <div class="flex justify-end gap-2">
                <button type="button" class="btn btn-secondary" data-dismiss="drawer">
                    <span>{{trans('general.close')}}</span>
                </button>

                <button type="submit" data-dismiss="drawer" class="btn btn-primary">
                    <span>{{trans('general.save')}}</span>
                </button>
            </div>
        </div>
    </form>
</div>
