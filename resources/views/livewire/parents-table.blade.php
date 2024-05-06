<div wire:ignore.self>
    @include('livewire.search')
    <div class="relative shadow-md table-responsive sm:rounded-lg">
        <table class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('Parents.Father_Name') }}</th>
                    <th>{{ trans('Parents.Father_Phone') }}</th>
                    <th>{{ trans('Parents.Mother_Name') }}</th>
                    <th>{{ trans('Parents.Mother_Phone') }}</th>
                    <th>{{ trans('Parents.Address') }}</th>
                    <th>{{ trans('General.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data['parents'] as $parent)
                <tr>
                    <td> {{ $data['parents']->firstItem()+$loop->index }}</td>
                    <td>{{ $parent->Father_Name }}</td>
                    <td>{{ $parent->Father_Phone }}</td>
                    <td>{{ $parent->Mother_Name }}</td>
                    <td>{{ $parent->Mother_Phone }}</td>
                    <td>{{ $parent->Address }}</td>

                    <td>
                        <div class="dropdown">
                            <button class="items-center dropdown-toggle btn btn-primary btn-xs"><svg class="w-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div class="dropdown-content">
                                <ul class="dropdown-list">
                                    <li class="dropdown-list-item">
                                        <a href="{{ route('parents.edit', $parent->id) }}" class="dropdown-link">
                                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg>
                                            {{ trans('general.edit') }}
                                        </a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a href="{{ route('parents.destroy', $parent->id) }}" class="dropdown-link"
                                            onclick="confirmation(event)"><svg class="w-4"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                            {{ trans('general.delete') }}</a>
                                    </li>
                                    <li class="dropdown-list-item">
                                        <a target="_blank" href="{{route('parent.show',$parent->id)}}"
                                            class="dropdown-link">
                                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-info">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                            </svg>
                                            {{ trans('general.info') }} </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <div class="alert alert-info" role="alert">
                    <p>{{ trans('general.Msg') }}</p>
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $data['parents']->links('components.paginator') }}

</div>
