@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('Recipt_Payments.title') }}
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6" x-data="payment({
        clothes: {{ json_encode($clothes->map(fn($c) => ['sales_price' => $c->sales_price, 'sales_price_set' => $c->sales_price_set])->values()->toArray()) }},
        books: {{ json_encode($books->map(fn($b) => ['sales_price' => $b->sales_price, 'sales_price_set' => $b->sales_price_set])->values()->toArray()) }}
    })">
        @include('backend.msg')
        <form id="form-with-multiple-column" autocomplete="off" class="max-w-full" action="{{ route('receipt-payment.store') }}"
            method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">{{ trans('Recipt_Payments.man') }}</label>
                    <input type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-500" disabled
                        value="{{ $invoice_manual }}">
                </div>
                <div>
                    <label
                        class="block text-sm font-medium text-gray-700 mb-1">{{ trans('general.choose', ['value' => trans('Recipt_Payments.title')]) }}</label>
                    <select
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                        id="payment_type" x-model="paymentType" name='type'>
                        <option selected value="">
                            {{ trans('general.choose', ['value' => trans('Recipt_Payments.title')]) }}</option>
                        <option value="fee_invoice">{{ trans('Sidebar.fees_invoice') }}</option>
                        <option value="payment_parts">{{ trans('Sidebar.payment_parts') }}</option>
                        <option value="clothes">{{ trans('Sidebar.clothes') }}</option>
                        <option value="books">{{ trans('Sidebar.books_sheets') }}</option>
                        <option value="pay_all">{{ trans('Sidebar.pay_all') }}</option>
                    </select>
                    <input type="hidden" value="{{ $Student->id }}" name="student_id">

                </div>
                <div>
                    <span class="block text-center text-lg font-lg text-gray-700 mb-1">{{ $Student->name }}</span>
                </div>
            </div>

            <div class="block">
                <div id="fee_invoice" x-show="paymentType === 'fee_invoice'" x-transition>
                    <input type="hidden" name="feeInvoice" :value="feeInvoice">
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-right font-medium text-gray-600">
                                        {{ trans('general.created_at') }}</th>
                                    <th class="px-4 py-2 text-right font-medium text-gray-600">{{ trans('fees.desc') }}
                                    </th>
                                    <th class="px-4 py-2 text-right font-medium text-gray-600">
                                        {{ trans('Recipt_Payments.amount') }}</th>
                                    <th class="px-4 py-2"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($Student->fee_invoice as $feeInvoice)
                                    <tr>
                                        <td class="px-4 py-2 text-gray-600">{{ $feeInvoice->invoice_date }}</td>
                                        <td class="px-4 py-2 text-gray-800">{{ $feeInvoice->schoolFee->title }}</td>
                                        @php
                                            $exceptionAmount = $Student->excption->sum('amount');
                                            $final = $feeInvoice->schoolFee->amount - $exceptionAmount;
                                        @endphp
                                        <td class="px-4 py-2 text-gray-800 font-medium">{{ $final }}</td>
                                        <td class="px-4 py-2">
                                            <button
                                                class="w-full px-3 py-2 bg-primary text-white rounded-lg hover:bg-primary/90"
                                                type="submit"
                                                @click="feeInvoice = {{ $feeInvoice->id }}">{{ trans('general.full_pay') }}</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-4 text-center bg-blue-50 text-blue-600 rounded">
                                            {{ trans('general.noDataToShow') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="payment_parts" x-show="paymentType === 'payment_parts'" x-transition>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-center">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('PaymentParts.date') }}</th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('PaymentParts.amount') }}</th>

                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($Student->parts as $part)
                                    <tr>
                                        <input type="hidden" name="id" value="{{ $part->id }}">
                                        <td class="px-4 py-2 text-gray-600">{{ $part->date }}</td>
                                        <td class="px-4 py-2 text-gray-800">{{ $part->amount }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="px-4 py-4 text-center bg-blue-50 text-blue-600 rounded">
                                            {{ trans('general.noDataToShow') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr class="py-2 px-4">
                                    <td>
                                        <label
                                            class="text-sm font-medium text-gray-700 mb-1">{{ trans('Recipt_Payments.enter_amount') }}</label>
                                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                                            placeholder="{{ trans('Recipt_Payments.enter_amount') }}" name="amount">
                                    <td>
                                    <td> <button
                                            class="w-full px-3 py-2 bg-primary text-white rounded-lg hover:bg-primary/90"
                                            type="submit">{{ trans('general.Submit') }}</button></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div id="clothe" x-show="paymentType === 'clothes'" x-transition>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th><input type="checkbox" name="isset" class="w-4 h-4 accent-green-600 rounded"
                                            x-model="selectAllClothes"></th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('fees.desc') }}</th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('Recipt_Payments.amount') }}
                                    </th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('clothes.qty') }}</th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('clothes.total_price') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($clothes as $order)
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="w-4 h-4 accent-green-600 rounded"
                                                x-model="clothes[{{ $loop->index }}].checked">
                                        </td>
                                        <td class="px-4 py-2 text-gray-800">{{ $order->name }}<input name="clothe_id[]"
                                                hidden value="{{ $order->id }}" /></td>
                                        <td class="px-4 py-2 text-gray-800 font-medium sales_price"
                                            x-text="clothesActivePrice({{ $loop->index }})">
                                        </td>
                                        <td class="px-4 py-2">
                                            <input type="text"
                                                class="qty w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-500"
                                                name="quantity[]" value="1"
                                                x-model="clothes[{{ $loop->index }}].quantity">
                                        </td>
                                        <td class="px-4 py-2">
                                            <input type="text"
                                                class="w-full px-4 py-2 border bg-gray-100 border-gray-300 rounded-lg bg-gray text-gray-500 total"
                                                disabled name="total[]"
                                                x-bind:value="clothesRowTotal({{ $loop->index }})">
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-4 text-center bg-blue-50 text-blue-600 rounded">
                                            {{ trans('general.noDataToShow') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="px-4 py-2"></td>
                                    <td colspan="1" class="px-4 py-2">
                                        <input type="text"
                                            class="w-full px-4 py-2 border border-gray-300 bg-gray-100 rounded-lg bg-gray text-gray-500"
                                            disabled name="grandTotal" x-bind:value="clothesTotalPrice">
                                    </td>
                                    <td colspan="2" class="px-4 py-2">
                                        <button
                                            class="w-full px-3 py-2 bg-primary text-white rounded-lg hover:bg-primary/90"
                                            type="submit">{{ trans('general.full_pay') }}</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div id="books" x-show="paymentType === 'books'" x-transition>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th><input type="checkbox" name="isset" class="w-4 h-4 accent-green-600 rounded"
                                            x-model="selectAllBooks"></th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('book_sheet.name') }}</th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('Recipt_Payments.amount') }}
                                    </th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('book_sheet.qty') }}</th>
                                    <th class="px-4 py-2 font-medium text-gray-600">{{ trans('book_sheet.total_price') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($books as $book)
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="w-4 h-4 accent-green-600 rounded"
                                                x-model="books[{{ $loop->index }}].checked">
                                        </td>
                                        <td class="px-4 py-2 text-gray-800">{{ $book->name }}<input name="book_id[]"
                                                hidden value="{{ $book->id }}" /></td>
                                        <td class="px-4 py-2 text-gray-800 font-medium sales_price"
                                            x-text="booksActivePrice({{ $loop->index }})">
                                        </td>
                                        <td class="px-4 py-2">
                                            <input type="text"
                                                class="qty w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-500"
                                                name="quantity[]" value="1"
                                                x-model="books[{{ $loop->index }}].quantity">
                                        </td>
                                        <td class="px-4 py-2">
                                            <input type="text"
                                                class="w-full px-4 py-2 border bg-gray-100 border-gray-300 rounded-lg bg-gray text-gray-500 total"
                                                disabled name="total[]" x-bind:value="booksRowTotal({{ $loop->index }})">
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-4 py-4 text-center bg-blue-50 text-blue-600 rounded">
                                            {{ trans('general.noDataToShow') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="px-4 py-2"></td>
                                    <td colspan="1" class="px-4 py-2">
                                        <input type="text"
                                            class="w-full px-4 py-2 border border-gray-300 bg-gray-100 rounded-lg bg-gray text-gray-500"
                                            disabled name="grandTotal" x-bind:value="booksTotalPrice">
                                    </td>
                                    <td colspan="2" class="px-4 py-2">
                                        <button
                                            class="w-full px-3 py-2 bg-primary text-white rounded-lg hover:bg-primary/90"
                                            type="submit">{{ trans('general.full_pay') }}</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div id="pay_all" x-show="paymentType === 'pay_all'">
                    <p class="px-4 py-3 bg-blue-50 text-blue-600 rounded-lg text-center">
                        {{ trans('general.noDataToShow') }}</p>
                </div>
            </div>
        </form>
    </div>
    @if ($report_data)
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mt-6" id="print">
            <div class="flex items-start justify-between pb-4 mb-4 border-b border-gray-200">
                <div>
                    @if ($school->image)
                        <img src="{{ asset('storage/attachments/schools/' . $school->slug . '/' . $school->image->filename) }}"
                            alt="{{ $school->name }}" class="h-12">
                    @else
                        <img src="{{ asset('assests/images/logo-icon-dark.png') }}" alt="Ischool" class="h-12">
                    @endif
                </div>
                <div class="text-left">
                    <h1 class="text-2xl font-bold text-gray-900">{{ trans('Recipt_Payments.title') }}</h1>
                    <p class="text-sm text-gray-500">{{ trans('general.created_at') }}:
                        {{ $report_data['recipt']->date }}</p>
                    <p class="text-sm text-gray-500">{{ trans('Recipt_Payments.man') }}:
                        {{ $report_data['recipt']->manual }}</p>
                </div>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-bold text-gray-800">{{ trans('Recipt_Payments.name') }}:
                    {{ $report_data['recipt']->student->name }}</h2>
            </div>

            @if (isset($report_data['items']) && count($report_data['items']))
                <div class="mb-4 overflow-x-auto">
                    <table class="w-full text-center border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gray-50">
                            <tr>
                                @foreach ($report_data['columns'] as $key => $label)
                                    <th class="px-4 py-2 text-sm font-medium text-gray-600">{{ $label }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($report_data['items'] as $item)
                                <tr class="border-b border-gray-200">
                                    @foreach ($report_data['columns'] as $key => $label)
                                        <td class="px-4 py-2 text-sm text-gray-800">{{ $item[$key] ?? '' }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            <div class="text-center mb-4">
                <h2 class="text-xl font-bold text-gray-700">{{ $report_data['tafqeet'] }}</h2>
            </div>

            <div class="flex justify-end mt-6 pt-4 border-t border-gray-200">
                <h5 class="text-sm font-medium text-gray-600">{{ trans('Recipt_Payments.sign') }}</h5>
            </div>

            <div class="flex justify-center mt-6">
                <button id="print_btn" onclick="window.print()"
                    class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-medium">
                    {{ trans('general.print') }}
                </button>
            </div>
        </div>

        @push('css')
            <style>
                @media print {
                    body * {
                        visibility: hidden;
                    }

                    #print,
                    #print * {
                        visibility: visible;
                    }

                    #print {
                        position: absolute;
                        left: 0;
                        top: 0;
                        width: 100%;
                    }

                    #print_btn {
                        visibility: hidden;
                    }
                }
            </style>
        @endpush
        @push('scripts')
            <script>
                setTimeout(() => window.print(), 500)
            </script>
        @endpush
    @endif
    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('payment', (data) => ({
                    paymentType: '',
                    feeInvoice: '',
                    clothes: data.clothes.map(c => ({
                        sales_price: Number(c.sales_price) || 0,
                        sales_price_set: Number(c.sales_price_set) || 0,
                        quantity: 1,
                        checked: false
                    })),
                    books: data.books.map(b => ({
                        sales_price: Number(b.sales_price) || 0,
                        sales_price_set: Number(b.sales_price_set) || 0,
                        quantity: 1,
                        checked: false
                    })),
                    get selectAllClothes() {
                        return this.clothes.length > 0 && this.clothes.every(item => item.checked);
                    },
                    set selectAllClothes(value) {
                        this.clothes.forEach(item => item.checked = value);
                    },
                    get selectAllBooks() {
                        return this.books.length > 0 && this.books.every(item => item.checked);
                    },
                    set selectAllBooks(value) {
                        this.books.forEach(item => item.checked = value);
                    },
                    clothesActivePrice(index) {
                        const item = this.clothes[index];
                        if (!item) return 0;
                        return item.checked && item.sales_price_set ? item.sales_price_set : item
                            .sales_price;
                    },
                    booksActivePrice(index) {
                        const item = this.books[index];
                        if (!item) return 0;
                        return item.checked && item.sales_price_set ? item.sales_price_set : item
                            .sales_price;
                    },
                    clothesRowTotal(index) {
                        const qty = Number(this.clothes[index]?.quantity) || 0;
                        const price = this.clothesActivePrice(index);
                        return (qty * price).toLocaleString('en-EG', {
                            style: 'currency',
                            currency: "{{ config('school.currency') }}"
                        });
                    },
                    booksRowTotal(index) {
                        const qty = Number(this.books[index]?.quantity) || 0;
                        const price = this.booksActivePrice(index);
                        return (qty * price).toLocaleString('en-EG', {
                            style: 'currency',
                            currency: "{{ config('school.currency') }}"
                        });
                    },
                    get clothesTotalPrice() {
                        const total = this.clothes.reduce((sum, item) => {
                            const qty = Number(item.quantity) || 0;
                            const price = item.checked && item.sales_price_set ? item
                                .sales_price_set : item.sales_price;
                            return sum + (qty * price);
                        }, 0);
                        return total.toLocaleString('en-EG', {
                            style: 'currency',
                            currency: "{{ config('school.currency') }}"
                        });
                    },
                    get booksTotalPrice() {
                        const total = this.books.reduce((sum, item) => {
                            const qty = Number(item.quantity) || 0;
                            const price = item.checked && item.sales_price_set ? item
                                .sales_price_set : item.sales_price;
                            return sum + (qty * price);
                        }, 0);
                        return total.toLocaleString('en-EG', {
                            style: 'currency',
                            currency: "{{ config('school.currency') }}"
                        });
                    }
                }));
            });
        </script>
    @endpush
@endsection
