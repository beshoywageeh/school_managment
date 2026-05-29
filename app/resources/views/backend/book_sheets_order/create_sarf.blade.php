@extends('layouts.app')
@section('title')
    {{ trans('stock.outcome_order') }}
@endsection
@section('content')
    @include('backend.msg')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 text-center">
                <div>
                    <h6 class="text-gray-700 font-medium">الرقم : {{ $auto_number }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">النوع : {{ trans('stock.outcome_order') }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">التاريخ : {{ date('Y-m-d') }}</h6>
                </div>
                <div>
                    <h6 class="text-gray-700 font-medium">الوقت : {{ date('g:i:s') }}</h6>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('student.name') }}</label>
                    <select name="student_id" id="student" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 select2 student">
                        <option value="" selected disabled>{{ trans('general.select') }}</option>
                        @forelse ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
            </div>
        </div>
        <form action="{{ route('bookSheetsOrder.store_sarf') }}"method="post" autocomplete="off">
            @csrf
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-center">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">#</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.name') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('stock.quantity') }}</th>
                                <th class="px-4 py-2 text-xs font-medium text-gray-500 uppercase">{{ trans('clothes.sales_price') }}</th>
                            </tr>
                        </thead>
                        <tbody id="invoice_data" class="divide-y divide-gray-100">
                            <tr class="bg-yellow-50">
                                <th colspan="4" class="px-4 py-4 text-yellow-700">{{ trans('general.choose_student') }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-end">
                <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
            </div>
        </form>
    </div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush
@endsection