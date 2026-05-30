@extends('layouts.app')
@section('title')
    {{ trans('stock.outcome_order') }} | {{ $auto_number }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600" onclick="printDiv()">
                <x-hero-icon name="print" class="w-5 h-5" />
            </button>
        </div>
        <form action="{{ route('clothes_out_order.store') }}" method="POST" id="invo_submit">
            @csrf
            <div class="p-6" style="min-height: 50vh;">
                <div class="border-b border-gray-200 mb-4 pb-4">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <h6 class="text-gray-700 font-medium">الرقم : {{ $auto_number }}</h6>
                        </div>
                        <div>
                            <h6 class="text-gray-700 font-medium">التاريخ : {{ date('Y-m-d') }}</h6>
                        </div>
                        <div>
                            <h6 class="text-gray-700 font-medium">الوقت : {{ date('s : i : g A') }}</h6>
                        </div>
                        <div>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="isset" id="" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="text-gray-700 font-medium">{{ trans('clothes.isset_order') }}</span>
                            </label>
                        </div>
                        <div class="md:col-span-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.name') }}</label>
                            <select name="student_id" id="student" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 tom-select student">
                                <option value="" selected disabled>{{ trans('general.select') }}</option>
                                @forelse ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto" id="print">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-center font-semibold text-gray-700">#</th>
                                <th class="px-4 py-2 text-start font-semibold text-gray-700">{{ trans('stock.name') }}</th>
                                <th class="px-4 py-2 text-start font-semibold text-gray-700">{{ trans('clothes.sales_price') }}</th>
                                <th class="px-4 py-2 text-start font-semibold text-gray-700">{{ trans('stock.quantity') }}</th>
                            </tr>
                        </thead>
                        <tbody id="invoice_data">
                            <tr class="bg-yellow-50">
                                <th colspan="4" class="px-4 py-4 text-center text-yellow-700">{{ trans('general.choose_student') }}</th>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="px-4 py-4">
                                    <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium" onclick="addNewRow()">{{ trans('general.New') }}</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
                <button onclick="document.getElementById('invo_submit').submit();" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">
                    {{ trans('general.Submit') }}
                </button>
            </div>
        </form>
    </div>
@endsection