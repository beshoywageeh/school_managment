<tr>
    <td> {{ $loop->iteration }}</td>
    <td>
        @if ($editId === $grade->id)
            <input type="text" wire:model='EditName' class="input input-sm" placeholder="ادخل اسم المرحلة" />
            <div class="flex justify-end gap-2 mt-2">
                <button type="button" class="btn btn-secondary btn-xs" wire:click='CancelEdit'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                </button>
                <button class="btn btn-primary btn-xs" wire:click='UpdateGrade'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-save">
                        <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                        <polyline points="17 21 17 13 7 13 7 21"></polyline>
                        <polyline points="7 3 7 8 15 8"></polyline>
                    </svg>
                </button>
            </div>
        @else
            {{ $grade->Grade_Name }}
        @endif

    </td>
    <td>{{ $grade->user->first_name . ' ' . $grade->user->second_name }}</td>
    <td>{{ $grade->created_at->format('Y/m/d') }}</td>
    <td>{{ $grade->class_room_count }}</td>
    <td>{{ $grade->students_count }}</td>
    <td>{{number_format($grade->fees_sum_amount,2) }}&nbsp;ج.م</td>


    <td>
        <x-drop-down_-table data="wire:ignore" edit delete info :data="$grade->id">
        </x-drop-down_-table>
    </td>
</tr>
