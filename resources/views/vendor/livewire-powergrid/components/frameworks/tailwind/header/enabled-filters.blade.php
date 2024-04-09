@if (count($enabledFilters))
    <div data-cy="enabled-filters" class="pg-enabled-filters-base">
        @if (count($enabledFilters) > 1)
            <span class="group pg-enabled-filters-span-clear-all gap-2 text-pg-primary-100 bg-pg-primary-500 dark:bg-pg-primary-700">
                {{ trans('livewire-powergrid::datatable.buttons.clear_all_filters') }}
                <div class="relative flex items-center w-2 h-2">
                    <button
                        wire:click.prevent="clearAllFilters"
                        type="button"
                    >
                        <x-livewire-powergrid::icons.x class="w-4 h-4" />
                    </button>
                </div>
            </span>
        @endif
        @foreach ($enabledFilters as $filter)
            @isset($filter['label'])
                <span
                    wire:key="enabled-filters-{{ $filter['field'] }}"
                    class="group pg-enabled-filters-span text-pg-primary-100 dark:text-pg-primary-500 bg-pg-primary-500 dark:bg-pg-primary-700 rounded-md gap-2 inline-flex size-md justify-center items-center py-1 px-4"
                >
                    {{ $filter['field'] }}
                    <div class="relative flex items-center w-2 h-2">
                        <button
                            data-cy="enabled-filters-clear-{{ $filter['field'] }}"
                            wire:click.prevent="clearFilter('{{ $filter['field'] }}')"
                            type="button"
                        >
                            <x-livewire-powergrid::icons.x class="w-4 h-4" />
                        </button>
                    </div>
                </span>
            @endisset
        @endforeach
    </div>
@endif
