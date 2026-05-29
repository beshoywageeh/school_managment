@extends('layouts.app')
@section('title')
    {{ trans('stock.outcome_order') }} | {{ $auto_number }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <div class="flex justify-between items-center">
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600" onclick="printDiv()">
                    <x-hero-icon name="print" class="w-5 h-5" />
                </button>
            </div>
        </div>
        <form action="{{ route('outorder.submit_transfer') }}" method="post">
            @csrf
            <div class="p-6" id="print">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                    <div>
                        <h6 class="text-gray-700 font-medium">{{ trans('orders.num') }} : {{ $auto_number }} <input type="hidden" name="auto_number"
                                value="{{ $auto_number }}"></h6>
                    </div>
                    <div>
                        <h6 class="text-gray-700 font-medium">{{ trans('general.date') }} : {{ date('Y-m-d') }}</h6>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('orders.location_to') }}</label>
                        <select name="location_to" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                                id="location_to">
                            <option selected disabled>
                                {{ trans('general.Choose', ['value' => trans('orders.location_to')]) }}
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
                        </select>
                    </div>
                </div>
                <hr class="my-4 border-gray-200">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                                <th class="px-4 py-2 text-start text-xs font-medium text-gray-500 uppercase">{{ trans('stock.quantity') }}</th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>
                        <tbody data-repeater-list="list_outorder">
                            <tr data-repeater-item>
                                <td class="px-4 py-2">
                                    <select name="stock_id" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200" id="">
                                        <option value="" selected disabled>
                                            {{ trans('general.choose', ['value' => trans('stock.name')]) }}
                                        </option>
                                        @foreach ($stocks->pluck('name', 'id') as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>

                                <td class="px-4 py-2"><input type="number" name="qty" value="0"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"></td>
                                <td class="px-4 py-2"><button type="button" data-repeater-delete class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600"><x-hero-icon name="trash" class="w-5 h-5" /></button></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="px-4 py-4">
                                    <input class="w-full px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" data-repeater-create
                                        type="button" value="{{ trans('general.New') }}" />
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 text-left">
                <button class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">{{ trans('general.Submit') }}</button>
            </div>
        </form>
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