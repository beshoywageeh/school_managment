@extends('layouts.app')
@section('title')
    {{ trans('stock.title') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 text-md-right">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                @can('clothes-income_order')
                                    <a href="{{ route('order.store') }}"
                                        class="px-4 btn btn-primary"><strong>{{ trans('stock.income_order') }}</strong></a>
                                @endcan
                                @can('clothes-outcome_order')
                                    <button data-toggle="modal" data-target="#CreateTransfer"
                                        class="px-4 btn btn-primary"><strong>{{ trans('stock.outcome_order') }}</strong></button>
                                @endcan
                                @can('clothes-inventory_order')
                                    <a href="{{ route('gard.create') }}"
                                        class="px-4 btn btn-primary"><strong>{{ trans('stock.inventory_order') }}</strong></a>
                                @endcan
                                @can('clothes-create')
                                    <button data-toggle="modal" data-target="#newItem"
                                        class="px-4 btn btn-success"><strong>{{ trans('general.new') }}</strong></button>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @can('clothes-index')
                            <table class="table table-bordered table-sm" id='datatable'>
                                <thead class="alert-info">
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('grades.title') }}</th>
                                        <th>{{ trans('class_rooms.title') }}</th>
                                        <th>{{ trans('stock.name') }}</th>
                                        <th>{{ trans('stock.opening_balance') }}</th>
                                        <th>{{ trans('stock.opening_date') }}</th>
                                        <th>{{ trans('stock.current_stock') }}</th>
                                        <th>{{ trans('General.actions') }}</th>
                                    </tr>
                                    </theadv>
                                <tbody>
                                    @forelse ($clothes as $stock)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $stock->grade->name }}</td>
                                            <td>{{ $stock->classroom->name }}</td>
                                            <td>{{ $stock->name }}</td>
                                            <td>{{ number_format($stock->opening_qty,2) }}</td>
                                            <td>{{ $stock->opening_stock_date }}</td>
                                            <td>{{ number_format($stock->orders()->sum('qty_in') + $stock->opening_qty - $stock->orders()->sum('qty_out'),2) }}
                                            </td>
                                            <td> <x-dropdown-table :buttonText="trans('general.actions')" :items="[
                                                [
                                                    'type' => 'link',
                                                    'url' => route('stock.destroy', $stock->id),
                                                    'text' => trans('general.delete'),
                                                    'icon' => 'ti-trash',
                                                    'onclick' => 'confirmation(event)',
                                                    'can' => 'stock-delete',
                                                ],
                                                [
                                                    'type' => 'button',
                                                    'text' => trans('general.edit'),
                                                    'icon' => 'ti-pencil',
                                                    'toggle' => 'modal',
                                                    'target' => '#editItem-' . $stock->id,
                                                    'can' => 'stock-update',
                                                ],
                                            ]" /></td>
                                        </tr>
                                        @include('backend.stocks.edit')
                                    @empty
                                        <tr>
                                            <td colspan='8'>
                                                {{ trans('general.404') }}
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        @include('backend.clothes.create')
        @include('backend.orders.transfer_create')
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.table').repeater({

                    show: function() {
                        $(this).slideDown();
                    },
                    hide: function(deleteElement) {
                        $(this).slideUp(deleteElement);
                    }
                });
            });
        </script>
        <script>
            const classrooms = document.querySelector('#classrooms');
            const grades = document.querySelector('#grades')
            grades.addEventListener('change', async () => {

                classrooms.innerHTML = '<option>{{ trans('student.choose_classroom') }}</option>';
                const response = await fetch(`/ajax/get_classRooms/${grades.value}`)
                const data = await response.json();
                data.forEach(class_rooms => {
                    const option = document.createElement('option');
                    option.value = class_rooms.id;
                    option.text = class_rooms.name;
                    classrooms.appendChild(option);
                });

            });
        </script>
    @endpush
@endsection
