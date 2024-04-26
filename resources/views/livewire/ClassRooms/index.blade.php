<div>
<x-card :page="$title">
    <x-slot name="button">
<x-button class="primary" :target="'#drawer-basic'">{{ trans('General.new') }}</x-button>
    </x-slot>
    <x-table.table>

        <x-slot name="head">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('Class_Rooms.Name') }}</th>
                        <th>{{ trans('Class_Rooms.Add_date') }}</th>
                        <th>{{ trans('Class_Rooms.Added_By') }}</th>
                        <th>{{ trans('Class_Rooms.grade') }}</th>
                        <th>{{ trans('Class_Rooms.Student_Count') }}</th>
                        <th>{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
        </x-slot>
        <tbody>
            @forelse ($data['class_rooms'] as $classroom)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>
                        @if ($editId === $classroom->id)
                            <input type="text" wire:model='EditName' class="input input-sm"
                                placeholder="ادخل اسم المرحلة" />
                            <div class="flex justify-end gap-2 mt-2">
                                <button type="button" class="btn btn-secondary btn-xs" wire:click='CancelEdit'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                </button>
                                <button class="btn btn-primary btn-xs" wire:click='UpdateClassRoom'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-save">
                                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                        </path>
                                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                        <polyline points="7 3 7 8 15 8"></polyline>
                                    </svg>
                                </button>
                            </div>
                        @else
                            {{ $classroom->class_name }}
                        @endif

                    </td>
                    <td>{{ $classroom->created_at->format('Y/m/d') }}</td>
                    <td>{{ $classroom->user->first_name . ' ' . $classroom->user->second_name }}</td>
                    <td>{{ $classroom->grade->Grade_Name }}</td>
                    <td>{{ $classroom->students_count }}</td>
<td>
                        <x-drop-down_-table edit delete info :data="$classroom->id">
                        </x-drop-down_-table>

                    </td>
                </tr>
            @empty
                <div class="alert alert-info" role="alert">
                    <p>{{ trans('General.Msg') }}</p>
                </div>
            @endforelse
        </tbody>
        <x-slot name="pages">
            {{ $data['class_rooms']->links() }}
        </x-slot>
    </x-table.tab>



    @include('livewire.ClassRooms.Create')
</x-card>
</div>
