@if (count($enabledFilters))
    <div
        class="col-md-12 d-flex table-responsive"
        style="margin-top: 5px"
    >
        @if (count($enabledFilters) > 1)
            <div
                wire:click.prevent="clearAllFilters()"
                style="cursor: pointer; padding-right: 4px"
            >
                <span
                    class="badge badge-dark">{{ trans('livewire-powergrid::datatable.buttons.clear_all_filters') }}
                    <i class="ti-close p-2"></i>
                </span>
            </div>
        @endif
        @foreach ($enabledFilters as $filter)
            @isset($filter['label'])
                <div
                    wire:click.prevent="clearFilter('{{ $filter['field'] }}')"
                    style="cursor: pointer; padding-right: 4px"
                >
                    <span class="badge badge-info">{{ $filter['label'] }}
                                            <i class="ti-close p-2"></i>

                    </span>
                </div>
            @endisset
        @endforeach
    </div>
@endif
