@extends('layouts.app')
@section('title')
    {{ trans('exchange_bonds.title') }}
@endsection
@push('css')
@endpush
@section('content')
    @can('exchange_bonds-list')
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-4 border-b border-gray-100 flex justify-between items-center">
                <h4 class="text-lg font-semibold text-gray-800">{{ trans('exchange_bonds.title') }}</h4>
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm" id="datatable">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">#</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('exchange_bonds.manual') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('exchange_bonds.acc_year') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('exchange_bonds.student') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('exchange_bonds.amount') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('exchange_bonds.description') }}</th>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500 uppercase">{{ trans('general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($exchanges as $exchange)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2 text-center text-gray-600">{{ $loop->index + 1 }}</td>
                                    <td class="px-4 py-2 text-gray-800">{{ $exchange->manual ?? '-' }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $exchange->acadmic_year->view }}</td>
                                    <td class="px-4 py-2 text-gray-800">{{ $exchange->student->name }}</td>
                                    <td class="px-4 py-2 text-gray-800 font-medium">{{ Number::currency($exchange->amount, 'EGP') }}</td>
                                    <td class="px-4 py-2 text-gray-600">{{ $exchange->description }}</td>
                                    <td class="px-4 py-2 text-center">
                                        <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                            [
                                                'type' => 'link',
                                                'url' => route('exchange_bonds.edit', $exchange->id),
                                                'text' => trans('general.edit'),
                                                'icon' => 'ti-pencil',
                                                'can' => 'exchange_bonds-edit',
                                            ],
                                            [
                                                'type' => 'link',
                                                'url' => route('exchange_bonds.destroy', $exchange->id),
                                                'text' => trans('general.delete'),
                                                'icon' => 'ti-trash',
                                                'onclick' => 'confirmation(event)',
                                                'can' => 'exchange_bonds-delete',
                                            ],
                                        ]" />
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-4 py-8 text-center text-gray-500">{{ trans('general.Msg') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endcan


@endsection
