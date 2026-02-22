@extends('layouts.app')
@section('title')
    {{ trans('stock.outcome_order') }} | {{ $auto_number }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="row mb-30">
        <div class="col">
            <div class="card">

                <div class="card-header">
                    <div class="row">
                        <div class="col text-right"><button class="btn btn-primary" onclick="printDiv()"><i
                                    class="fa fa-print"></i></button></div>
                    </div>
                </div>
                <form action="{{ route('outorder.submit_transfer') }}" method="post">
                    @csrf
                    <div class="card-body" id="print">
                        <div class="row">
                            <div class="col">
                                <h6>{{ trans('orders.num') }} : {{ $auto_number }} <input type="hidden" name="auto_number" value="{{ $auto_number }}"></h6>
                            </div>
                            <div class="col">
                                <h6>{{ trans('general.date') }} : {{ date('Y-m-d') }}</h6>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col"><label>{{ trans('orders.location_to') }}</label></div>
                                    <div class="col"><select name="location_to" class="custom-select select2"
                                            id="location_to">
                                            <option selected disabled>
                                                {{ trans('General.Choose', ['value' => trans('orders.location_to')]) }}
                                            </option>
                                            @if ($labs->isNotEmpty())
                                                @foreach ($labs as $lab)
                                                    <optgroup label="{{ $lab->location }}">
                                                        @if ($lab->sub_locations->isNotEmpty())
                                                            @foreach ($lab->sub_locations as $laboratory)
                                                                <option value="{{ $laboratory->id }}">
                                                                    {{ $laboratory->sub_location }}
                                                                </option>
                                                            @endforeach
                                                        @else
                                                            <option disabled>{{ __('General.noDataToShow') }}</option>
                                                        @endif
                                                    </optgroup>
                                                @endforeach
                                            @else
                                                <option disabled>{{ __('General.noDataToShow') }}</option>
                                            @endif
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-bordered list_outorder table-sm">
                                        <thead>
                                            <tr>
                                                <th>{{ trans('stock.name') }}</th>
                                                <th>{{ trans('stock.quantity') }}</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody data-repeater-list="list_outorder">
                                            <tr data-repeater-item>
                                                <td>
                                                    <select name="stock_id" class="custom-select" id="">
                                                        <option value="" selected disabled>
                                                            {{ trans('General.choose', ['value' => trans('stock.name')]) }}
                                                        </option>
                                                        @foreach ($stocks->pluck('name', 'id') as $id => $name)
                                                            <option value="{{ $id }}">{{ $name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td><input type="number" name="qty" value="0"
                                                        class="form-control"></td>
                                                <td><button type="button" data-repeater-delete class="btn btn-danger"><i
                                                            class="fa fa-trash"></i></button></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4">
                                                    <input class="btn btn-success btn-block" data-repeater-create
                                                        type="button" value="{{ trans('General.New') }}" />
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary btn-lg">{{ trans('general.Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.list_outorder').repeater({

                    show: function() {
                        $(this).slideDown();
                    },
                    hide: function(deleteElement) {
                        $(this).slideUp(deleteElement);
                    }
                });
            });
        </script>
    @endpush
@endsection
