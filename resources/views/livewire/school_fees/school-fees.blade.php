<div>

    <x-card :page="$page">
        <x-slot name="button">
            <x-button  :target="'#new_fee'" type="modal">{{trans('fees.create')}}</x-button>
        </x-slot>
        <x-table.table>
            <x-slot name='head'>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{trans('fees.grade')}}</th>
                        <th>{{trans('fees.classroom')}}</th>
                        <th>{{trans('fees.by')}}</th>
                        <th>{{trans('fees.desc')}}</th>
                        <th>{{trans('fees.amount')}}</th>
                        <th>{{trans('general.actions')}}</th>
                    </tr>
                </thead>
            </x-slot>
            @forelse ($data['fees'] as $fee)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$fee->grade->Grade_Name}}</td>
                    <td>{{$fee->classroom->class_name}}</td>
                    <td>{{$fee->user->first_name}}</td>
                    <td>{{$fee->description}}</td>
                    <td>{{number_format($fee->amount,2) }}&nbsp;ج.م</td>
                    <td>
                        <x-drop-down_-table edit delete :data="$fee->id"></x-drop-down_-table>
                    </td>
                </tr>
            @empty
            <div class="alert alert-info" role="alert">
                <p>{{ trans('General.Msg') }}</p>
            </div>
            @endforelse
        </x-table.table>
    </x-card>
    <x-modal :modalTitle="$title" :eventName="$event" size="modal-lg" iden="new_fee">
        <form >
            <select class='select'>
                <option value=""></option>
            </select>
        </form>

    </x-modal>
</div>
