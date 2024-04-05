@props(['edit', 'delete', 'info', 'data','igonre'])
<div {{$ignore}}>
    <div class="dropdown">
        <button class="items-center dropdown-toggle btn btn-primary btn-xs">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="w-4 feather feather-chevron-down">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg></i>
        </button>
        <div class="dropdown-content">
            <ul class="dropdown-list">
                {{ $slot }}
                @isset($edit)
                    <li class="dropdown-list-item">
                        <button class="dropdown-link" wire:click="Edit({{ $data }})">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-edit text-primary-600">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                            {{ trans('general.edit') }}
                        </button>
                    </li>
                @endisset
                @isset($delete)
                    <li class="dropdown-list-item">
                        <button class="dropdown-link" wire:click="Delete({{ $data }})"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-red-600 feather feather-trash-2">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg> {{ trans('general.delete') }} </button>
                    </li>
                @endisset
                @isset($info)
                    <li class="dropdown-list-item">
                        <a {{$attributes}} class="dropdown-link"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg> {{ trans('general.info') }} </a>
                    </li>
                @endisset

            </ul>
        </div>
    </div>
</div>
