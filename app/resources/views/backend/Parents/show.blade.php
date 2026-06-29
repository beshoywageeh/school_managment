@extends('layouts.app')
@section('title')
    {{ trans('general.buttons.view') }} | {{ $parent->father_name }}
@endsection
@push('css')
    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }
    </style>
@endsection
@section('content')
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6" id="print">
        <div class="flex justify-between items-center mb-6">
            <h4 class="text-lg font-semibold text-gray-800">{{ $parent->father_name }}</h4>
            <div class="text-left">
                <x-button id="print_Button" class="primary" type="" onclick="printDiv()">
                    <svg class="w-5 h-5 inline ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                    {{ trans('general.buttons.print') }}
                </x-button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <tr class="border-b border-gray-100">
                    <th class="py-3 px-4 text-right font-medium text-gray-600">{{ trans('Parents.Father_Name') }}</th>
                    <td class="py-3 px-4 text-gray-800">{{ $parent->father_name }}</td>
                    <th class="py-3 px-4 text-right font-medium text-gray-600">{{ trans('Parents.Father_Phone') }}</th>
                    <td class="py-3 px-4 text-gray-800">{{ $parent->father_phone }}</td>
                </tr>
                <tr class="border-b border-gray-100">
                    <th class="py-3 px-4 text-right font-medium text-gray-600">{{ trans('Parents.Mother_Name') }}</th>
                    <td class="py-3 px-4 text-gray-800">{{ $parent->mother_name }}</td>
                    <th class="py-3 px-4 text-right font-medium text-gray-600">{{ trans('Parents.Mother_Phone') }}</th>
                    <td class="py-3 px-4 text-gray-800">{{ $parent->mother_phone }}</td>
                </tr>
            </table>
        </div>
        <hr class="my-6 border-gray-200">
        <div class="mt-4 overflow-x-auto">
            <table class="w-full text-sm">
                <tr class="border-b border-gray-100">
                    <th class="py-3 px-4 text-right font-medium text-gray-600">{{ trans('student.name') }}</th>
                    <th class="py-3 px-4 text-right font-medium text-gray-600">{{ trans('student.birth_date') }}</th>
                    <th class="py-3 px-4 text-right font-medium text-gray-600">{{ trans('student.gender') }}</th>
                    <th class="py-3 px-4 text-right font-medium text-gray-600">{{ trans('student.grade') }}</th>
                </tr>
                @forelse ($parent->students as $student)
                    <tr class="border-b border-gray-50 hover:bg-gray-50">
                        <td class="py-3 px-4">
                            <a class="px-3 py-1 bg-gray-500 text-white text-sm rounded-lg hover:bg-gray-600"
                                href="{{ route('students.show', $student->id) }}">{{ $student->name }}</a>
                        </td>
                        <td class="py-3 px-4 text-gray-600">{{ $student->birth_date }}</td>
                        <td class="py-3 px-4 text-gray-600">{{ $student->gender->lang() }}</td>
                        <td class="py-3 px-4 text-gray-600">{{ $student->grade->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-4 text-center text-gray-500">{{ trans('general.not_found') }}</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>

    @push('scripts')
    @endpush
@endsection