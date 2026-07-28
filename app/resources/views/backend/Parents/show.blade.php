@extends('layouts.app')
@section('title')
    {{ trans('general.show') }} | {{ $parent->father_name }}
@endsection
@section('content')

<div class="min-h-screen bg-gray-50 py-6 px-4" id="print">
    <div class="max-w-6xl mx-auto" >

        {{-- Header Card --}}
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm mb-6 overflow-hidden" >
            <div class="bg-gradient-to-l from-blue-600 to-blue-700 px-6 py-5">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-blue-200 text-sm mb-1">{{ trans('general.show') }}</p>
                        <h1 class="text-2xl font-bold text-white tracking-wide">
                            {{ $parent->father_name  }}
                        </h1> <h1 class="text-2xl font-bold text-white tracking-wide">
                            {{ $parent->mother_name  }}
                        </h1>

                    </div>
                    <button
                        onclick="printDiv()"
                        class="flex items-center gap-2 px-4 py-2.5 bg-white text-blue-700 rounded-xl font-semibold text-sm shadow hover:bg-blue-50 transition-colors duration-200 print:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                        </svg>
                        {{ trans('general.print') }}
                    </button>
                </div>
            </div>


        </div>

        @include('backend.msg')

        {{-- ===== TAB: Basic Info ===== --}}
        <div >

            {{-- Parent Info --}}
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm mb-5 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/70">
                    <h3 class="font-bold text-gray-700 text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/>
                        </svg>
                        {{ trans('Parents.student_info') }}
                    </h3>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4" dir="rtl">
                    @forelse($parent->students as $student)
                    <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4">
                        <span class="text-gray-800 font-semibold">{{ $student->name }}</span>


                    <table class="w-full text-sm" dir="rtl">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-100">
                                <th class="py-3 px-5 font-semibold text-gray-500 text-right">{{ trans('payment.date') }}</th>
                                <th class="py-3 px-5 font-semibold text-gray-500 text-right">{{ trans('payment.type') }}</th>
                                <th class="py-3 px-5 font-semibold text-green-600 text-right">{{ trans('payment.credit') }}</th>
                                <th class="py-3 px-5 font-semibold text-red-500 text-right">{{ trans('payment.debit') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($student->studentAccount as $stdAcc)
                                <tr class="border-b border-gray-50 hover:bg-gray-50/70 transition-colors">
                                    <td class="py-3 px-5 text-gray-500 text-sm">{{ $stdAcc->created_at->format('Y-m-d') }}</td>
                                    <td class="py-3 px-5 text-gray-700">{{ $stdAcc->type->lang() }}</td>
                                    <td class="py-3 px-5 text-green-700 font-semibold">{{ number_format($stdAcc->credit, 2) }} {{ trans('general.currency') }}</td>
                                    <td class="py-3 px-5 text-red-600 font-semibold">{{ number_format($stdAcc->debit, 2) }} {{ trans('general.currency') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="py-10 text-center text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mx-auto mb-2 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 2.5 2 2.5-2 3.5 2z"/>
                                        </svg>
                                        {{ trans('payment.no_records') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr class="bg-blue-50 border-t-2 border-blue-100">
                                <td colspan="2" class="py-3 px-5 font-bold text-blue-700 text-right">{{ trans('payment.total') }}</td>
                                <td class="py-3 px-5 font-bold text-green-700">{{ number_format($student->studentAccount->sum('credit'), 2) }} {{ trans('general.currency') }}</td>
                                <td class="py-3 px-5 font-bold text-red-600">{{ number_format($student->studentAccount->sum('debit'), 2) }} {{ trans('general.currency') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                    </div>

                    @empty
                    <div>
                    </div>
                    @endforelse

                </div>
            </div>

               </div>
    </div>
</div>

@push('scripts')
<script>
function printDiv() {
    window.print();
}
</script>
<style>
@media print {
    body * { visibility: hidden; }
    #print, #print * { visibility: visible; }
    #print { position: absolute; inset: 0; padding: 2rem; }
    .print\:hidden { display: none !important; }
}
</style>
@endpush
@endsection
