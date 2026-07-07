@extends('layouts.app')
@section('title')
    {{ trans('general.new') }} | {{ trans('PaymentParts.title') }}
@endsection
@section('content')
  <form id="form-with-multiple-column" class="max-w-full" action="{{ route('payment_parts.store') }}" x-data="{

        parts: [{ fee_id: '', pay_at: '', amount: '' }],
    addRow() {
        this.parts.push({ fee_id: '', pay_at: '', amount: '' });
    },
     removeRow(index) {
        if (this.parts.length > 1) this.parts.splice(index, 1);
    },
        }"
            method="post">
            @csrf
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        @include('backend.msg')
        <div class="flex align-center gap-4 mb-6">
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600" readonly value="{{ $student->name .' '.$student->parent->father_name }}">
            <div class="shrink-0 px-4 py-2 bg-emerald-50 border border-emerald-200 rounded-lg text-emerald-700 font-semibold">
                   {{ trans('PaymentParts.total_required') }}: {{ number_format($student->fee_invoice->flatMap->fees->sum('amount'), 2) }}
               </div>
        </div>


            <input type="hidden" hidden name="student_id" value="{{ $student->id }}">
            <input type="hidden" name="acd_year" value="{{ $student->acadmiecyear_id }}">
          <div class="overflow-x-auto rounded-lg border border-gray-200">
                        <table class="min-w-full  text-center">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-200">
                                    <th class="px-4 py-2.5 text-start text-xs font-semibold text-gray-500 uppercase tracking-wide">{{ trans('fee_invoice.title') }}</th>
                                    <th class="px-4 py-2.5 text-start text-xs font-semibold text-gray-500 uppercase tracking-wide w-36">{{ trans('PaymentParts.date') }}</th>
                                    <th class="px-4 py-2.5 text-center text-xs font-semibold text-gray-500 uppercase tracking-wide w-24">{{ trans('PaymentParts.amount') }}</th>
                                    <th class="px-4 py-2.5 w-12"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                               <template x-for="(part,index) in parts" :key="index">
                            <tr  class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-2">
                                <select class=" px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" :name="`parts[${index}][fee_id]`">
                                    <option value="" selected>{{ trans('general.choose',['value'=>trans('Sidebar.fees_invoice')]) }}
                                    </option>
                                    @foreach ($student->fee_invoice as $fee_invoice)

                                    <option value="{{ $fee_invoice->fees->id }}">{{ $fee_invoice->fees->title }}
                                        - {{ $fee_invoice->fees->amount }}</option>

                                    @endforeach
                                </select>
                            </td>
                            <td class="px-4 py-2">
                                <input type="date" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" :name="`parts[${index}][pay_at]`" id="">
                            </td>
                            <td class="px-4 py-2">
                                <input type="number" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" :name="`parts[${index}][amount]`" id="">
                            </td>
                            <td class="px-4 py-2">
                                <button type="button" x-on:click="removeRow(index)"
                                                class="p-1.5 text-red-400 hover:text-danger hover:bg-danger/10 rounded-lg transition-colors">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                            </td>
                        </tr>
            </template>
                            </tbody>
                            <tfoot>
                                <tr class="bg-gray-50 border-t border-gray-200">
                                    <td colspan="4" class="px-4 py-2">
                                         <button type="button" x-on:click="addRow()"
                                            class="w-full px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-200 rounded-lg hover:bg-blue-50 hover:border-blue-400 transition cursor-pointer">
                                            {{ trans('general.new') }}
                                        </button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                           <div class="flex items-center justify-end gap-2 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <x-button class="primary" type="submit">
                        {{ trans('general.Submit') }}
                    </x-button>
                    </div>
        </div>
    </form>

    @push('scripts')
    @endpush
@endsection
