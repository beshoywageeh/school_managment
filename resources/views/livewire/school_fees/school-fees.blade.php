<div>

    <x-card :page="$page">
        <x-slot name="button">
<x-button class="primary" :target="$event" type="modal">{{ trans('fees.create') }}</x-button>
        </x-slot>
        <x-table.table>
            <x-slot name='head'>
                <thead>
                    <tr>
                        <th>#</th>
<th>{{ trans('fees.grade') }}</th>
                        <th>{{ trans('fees.classroom') }}</th>
                        <th>{{ trans('fees.by') }}</th>
                        <th>{{ trans('fees.desc') }}</th>
                        <th>{{ trans('fees.amount') }}</th>
                        <th>{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
            </x-slot>
            @forelse ($data['fees'] as $fee)
                <tr>
<td>{{ $loop->iteration }}</td>
                    <td>{{ $fee->grade->Grade_Name }}</td>
                    <td>{{ $fee->classroom->class_name }}</td>
                    <td>{{ $fee->user->first_name }}</td>
                    <td>{{ $fee->description }}</td>
                    <td>{{ number_format($fee->amount, 2) }}&nbsp;ج.م</td>
                    <td>
                        <x-drop-down_-table edit delete :data="$fee->id"></x-drop-down_-table>
                    </td>
                </tr>
            @empty
<div class="alert alert-info" role="alert">
                    <p>{{ trans('General.Msg') }}</p>
                </div>
            @endforelse
<x-slot name="pages">{{ $data['fees']->links() }}</x-slot>
        </x-table.table>
    </x-card>
<x-modal :modalTitle="$title" :eventName="$event" size="">
        <form id="form-horizontal">
            <div class="flex flex-col gap-4">
                <!-- Form Row: Full name -->
                <div class="flex w-full flex-col items-center gap-1 md:flex-row md:gap-2">
                    <div class="w-full md:w-1/4">
                        <label class="label label-required" for="form-horizontal-full-name"> {{trans('fees.choose_grade')}}
                        </label>
                    </div>
                    <div class="w-full md:w-3/4">
                        <select wire:model.live.debounce.150ms='grade_id' class='select'>
                            @foreach ($data['grade'] as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->Grade_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex w-full flex-col items-center gap-1 md:flex-row md:gap-2">
                    <div class="w-full md:w-1/4">
                        <label class="label label-required" for="form-horizontal-full-name">
                            {{trans('fees.choose_classroom')}} </label>
                    </div>
                    <div class="w-full md:w-3/4">
                        <select class='select'>
@foreach ($data['class_room'] as $class_room)
                            <option value="{{ $class_room->id }}">{{ $class_room->class_name }}</option>
                            @endforeach
                            </select>
</div>
                    </div>
                    </div>
        </form>

    </x-modal>
</div>
