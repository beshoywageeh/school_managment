@extends('layouts.app')
@section('title')
    {{ trans('student.show') }} | {{ $student->name }}
@endsection
@section('content')

<div class="min-h-screen bg-gray-50 py-6 px-4">
    <div class="max-w-5xl mx-auto" x-data="{ activeTab: 'basic_info' }">

        {{-- Header Card --}}
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm mb-6 overflow-hidden">
            <div class="bg-gradient-to-l from-blue-600 to-blue-700 px-6 py-5">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-blue-200 text-sm mb-1">{{ trans('student.show') }}</p>
                        <h1 class="text-2xl font-bold text-white tracking-wide">
                            {{ $student->name . ' ' . $student->parent->father_name }}
                        </h1>
                        <span class="inline-block mt-2 text-xs bg-blue-500/40 text-blue-100 px-3 py-1 rounded-full">
                            {{ $student->grade->name }}
                        </span>
                    </div>
                    <button
                        onclick="printDiv()"
                        class="flex items-center gap-2 px-4 py-2.5 bg-white text-blue-700 rounded-xl font-semibold text-sm shadow hover:bg-blue-50 transition-colors duration-200 print:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                        </svg>
                        {{ trans('general.print') . ' ' . trans('general.attendance_request') }}
                    </button>
                </div>
            </div>

            {{-- Tab Navigation --}}
            <div class="flex border-b border-gray-100 bg-gray-50/50 print:hidden">
                <button
                    @click="activeTab = 'basic_info'"
                    :class="activeTab === 'basic_info'
                        ? 'border-b-2 border-blue-600 text-blue-600 bg-white'
                        : 'text-gray-500 hover:text-gray-700 hover:bg-gray-100'"
                    class="flex items-center gap-2 px-6 py-4 text-sm font-medium transition-all duration-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    {{ trans('general.basic_info') }}
                </button>
                <button
                    @click="activeTab = 'attendance_request'"
                    :class="activeTab === 'attendance_request'
                        ? 'border-b-2 border-blue-600 text-blue-600 bg-white'
                        : 'text-gray-500 hover:text-gray-700 hover:bg-gray-100'"
                    class="flex items-center gap-2 px-6 py-4 text-sm font-medium transition-all duration-200 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    {{ trans('general.attendance_request') }}
                </button>
            </div>
        </div>

        @include('backend.msg')

        {{-- ===== TAB: Basic Info ===== --}}
        <div x-show="activeTab === 'basic_info'"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0">

            {{-- Parent Info --}}
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm mb-5 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/70">
                    <h3 class="font-bold text-gray-700 text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/>
                        </svg>
                        {{ trans('student.parent_info') }}
                    </h3>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-4" dir="rtl">
                    <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4">
                        <span class="text-xs text-gray-400 font-medium">{{ trans('Parents.Father_Name') }}</span>
                        <span class="text-gray-800 font-semibold">{{ $student->parent->father_name }}</span>
                    </div>
                    <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4">
                        <span class="text-xs text-gray-400 font-medium">{{ trans('Parents.Father_Phone') }}</span>
                        <span class="text-gray-800 font-semibold tracking-wide">{{ $student->parent->father_phone }}</span>
                    </div>
                    <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4">
                        <span class="text-xs text-gray-400 font-medium">{{ trans('Parents.Mother_Name') }}</span>
                        <span class="text-gray-800 font-semibold">{{ $student->parent->mother_name }}</span>
                    </div>
                    <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4">
                        <span class="text-xs text-gray-400 font-medium">{{ trans('Parents.Mother_Phone') }}</span>
                        <span class="text-gray-800 font-semibold tracking-wide">{{ $student->parent->mother_phone }}</span>
                    </div>
                </div>
            </div>

            {{-- Student Info --}}
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm mb-5 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/70">
                    <h3 class="font-bold text-gray-700 text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        {{ trans('student.info') }}
                    </h3>
                </div>
                <div class="p-6 grid grid-cols-2 md:grid-cols-4 gap-4" dir="rtl">
                    <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4 col-span-2 md:col-span-1">
                        <span class="text-xs text-gray-400 font-medium">{{ trans('student.name') }}</span>
                        <span class="text-gray-800 font-semibold">{{ $student->name }}</span>
                    </div>
                    <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4">
                        <span class="text-xs text-gray-400 font-medium">{{ trans('student.birth_date') }}</span>
                        <span class="text-gray-800 font-semibold">{{ $student->birth_date }}</span>
                    </div>
                    <div class="flex flex-col gap-1 bg-gray-50 rounded-xl p-4">
                        <span class="text-xs text-gray-400 font-medium">{{ trans('student.gender') }}</span>
                        <span class="text-gray-800 font-semibold">{{ $student->gender->lang() }}</span>
                    </div>
                    <div class="flex flex-col gap-1 bg-blue-50 rounded-xl p-4">
                        <span class="text-xs text-blue-400 font-medium">{{ trans('student.grade') }}</span>
                        <span class="text-blue-700 font-bold">{{ $student->grade->name }}</span>
                    </div>
                </div>
            </div>

            {{-- Payments Table --}}
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-50 bg-gray-50/70 flex items-center justify-between" dir="rtl">
                    <h3 class="font-bold text-gray-700 text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                        {{ trans('payment.history') }}
                    </h3>
                    <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full font-medium">
                        {{ $student->StudentAccount->count() }} {{ trans('payment.record') }}
                    </span>
                </div>
                <div class="overflow-x-auto">
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
                            @forelse ($student->StudentAccount as $account)
                                <tr class="border-b border-gray-50 hover:bg-gray-50/70 transition-colors">
                                    <td class="py-3 px-5 text-gray-500 text-sm">{{ $account->created_at->format('Y-m-d') }}</td>
                                    <td class="py-3 px-5 text-gray-700">{{ $account->type->lang() }}</td>
                                    <td class="py-3 px-5 text-green-700 font-semibold">{{ number_format($account->credit, 2) }} {{ trans('general.currency') }}</td>
                                    <td class="py-3 px-5 text-red-600 font-semibold">{{ number_format($account->debit, 2) }} {{ trans('general.currency') }}</td>
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
                                <td class="py-3 px-5 font-bold text-green-700">{{ number_format($student->StudentAccount->sum('credit'), 2) }} {{ trans('general.currency') }}</td>
                                <td class="py-3 px-5 font-bold text-red-600">{{ number_format($student->StudentAccount->sum('debit'), 2) }} {{ trans('general.currency') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        {{-- ===== TAB: Attendance Request ===== --}}
        <div x-show="activeTab === 'attendance_request'"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0">

            <div id="print" class="bg-white rounded-xl border border-gray-100 shadow-sm p-6" dir="rtl">

                {{-- Print Header --}}
                <div class="grid grid-cols-3 gap-6 mb-8 items-start">
                    <div class="text-center">
                        <div class="text-sm leading-relaxed text-gray-700">{!! $school->heading_right !!}</div>
                    </div>
                    <div class="text-center">
                        <h2 class="text-2xl font-extrabold text-gray-900 mb-2">{{ trans('general.attendance_request') }}</h2>
                        <p class="text-sm text-gray-500">{{ trans('student.attention') }}</p>
                    </div>
                    <div class="flex justify-center">
                        <div class="w-36 h-44 border-2 border-gray-300 rounded-lg flex items-center justify-center bg-gray-50 text-gray-400 text-xs">
                            {{ trans('student.student_photo') }}
                        </div>
                    </div>
                </div>

                <hr class="my-6 border-gray-200">

                {{-- Student Details Table --}}
                <table class="w-full text-sm">
                    @php
                        $rows = [
                            [trans('student.name'),        $student->name . ' ' . $student->parent->father_name,   trans('student.national_id'),  $student->national_id],
                            [trans('student.nationality'), $student->nationality->name,                             trans('student.religion'),     $student->religion->lang()],
                        ];
                    @endphp

                    @foreach ($rows as $row)
                        <tr class="border-b border-gray-100">
                            <th class="py-3 px-4 text-right font-semibold text-gray-600 w-1/4 bg-gray-50">{{ $row[0] }}</th>
                            <td class="py-3 px-4 text-right text-gray-800 w-1/4">{{ $row[1] }}</td>
                            <th class="py-3 px-4 text-right font-semibold text-gray-600 w-1/4 bg-gray-50">{{ $row[2] }}</th>
                            <td class="py-3 px-4 text-right text-gray-800 w-1/4">{{ $row[3] }}</td>
                        </tr>
                    @endforeach

                    <tr class="border-b border-gray-100">
                        <th class="py-3 px-4 text-right font-semibold text-gray-600 bg-gray-50">{{ trans('student.address') }}</th>
                        <td class="py-3 px-4 text-right text-gray-800" colspan="3">{{ $student->address }}</td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <th class="py-3 px-4 text-right font-semibold text-gray-600 bg-gray-50">{{ trans('student.birth_date') }}</th>
                        <td class="py-3 px-4 text-right text-gray-800" colspan="3">{{ $student->birth_date }}</td>
                    </tr>

                    {{-- Age in October --}}
                    <tr class="border-b border-gray-100">
                        <th class="py-3 px-4 text-right font-semibold text-gray-600 bg-gray-50 align-top">{{ trans('student.ageInOctober') }}</th>
                        <td class="py-3 px-4" colspan="3">
                            @php $date = \Carbon\Carbon::parse($student->birth_at_begin); @endphp
                            <table class="text-sm border border-gray-200 rounded-lg overflow-hidden">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="py-2 px-6 text-center font-semibold text-gray-600 border-l border-gray-200">{{ trans('student.year') }}</th>
                                        <th class="py-2 px-6 text-center font-semibold text-gray-600 border-l border-gray-200">{{ trans('student.month') }}</th>
                                        <th class="py-2 px-6 text-center font-semibold text-gray-600">{{ trans('student.day') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-6 text-center text-gray-800 border-l border-gray-200">{{ $date->format('y') }}</td>
                                        <td class="py-2 px-6 text-center text-gray-800 border-l border-gray-200">{{ $date->format('m') }}</td>
                                        <td class="py-2 px-6 text-center text-gray-800">{{ $date->format('d') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    {{-- Simple rows --}}
                    @php
                        $simpleRows = [
                            [trans('student.status_request'),         $student->student_status->lang()],
                            [trans('student.school_certificate'),     ''],
                            [trans('student.schools_in'),             ''],
                            [trans('student.acc_join'),               ''],
                            [trans('student.parent_assest_name_job'), ''],
                            [trans('student.parent_sender_name_job'), ''],
                            [trans('student.total_degree'),           ''],
                        ];
                    @endphp

                    @foreach ($simpleRows as $row)
                        <tr class="border-b border-gray-100">
                            <th class="py-3 px-4 text-right font-semibold text-gray-600 bg-gray-50">{{ $row[0] }}</th>
                            <td class="py-3 px-4 text-right text-gray-800" colspan="3">{{ $row[1] }}</td>
                        </tr>
                    @endforeach

                    <tr class="border-b border-gray-100">
                        <th class="py-3 px-4 text-right font-semibold text-gray-600 bg-gray-50">{{ trans('student.parent_name_job') }}</th>
                        <td class="py-3 px-4 text-right text-gray-800">{{ $student->parent->father_name }}</td>
                        <td class="py-3 px-4 text-right text-gray-800" colspan="2">{{ $student->parent->father_job }}</td>
                    </tr>
                </table>

                <hr class="my-8 border-gray-200">

                {{-- Footer --}}
                <div class="flex justify-between items-start mt-4 text-sm text-gray-700">
                    <div class="text-gray-500">
                        {{ trans('student.write_at') }}&nbsp; {{ date('d/m/Y') }}
                    </div>
                    <div class="text-right space-y-2">
                        <p class="font-semibold text-gray-700">{{ trans('student.parent_sign') }}</p>
                        <p>
                            <span class="font-semibold text-gray-600">{{ trans('student.parent_name') }}</span>
                            {{ $student->parent->father_name }}
                        </p>
                        <p class="font-semibold text-gray-700">{{ trans('student.sign') }}</p>
                    </div>
                </div>

                <hr class="my-6 border-gray-200">

                <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                    <p>{{ trans('student.msg_1') }}</p>
                    <p>{{ trans('student.msg_2') }}</p>
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
