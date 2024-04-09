@props(['size', 'iden', 'modalTitle', 'eventName'])
<div class="modal {{ $size ?? '' }}" id="{{ $iden }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="flex items-center justify-between">
                    <h6>{{ trans($modalTitle) }}</h6>
                    <button type="button"
                        class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                        data-dismiss="modal">
                        <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <div class="flex items-center justify-end gap-4">
                    <button x-on:click="$dispatch('{{ $eventName }}-close')" type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('General.close') }}</button>
                    <button x-on:click="$dispatch('{{ $eventName }}')" type="button"
                        class="btn btn-primary">{{ trans('general.save') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
