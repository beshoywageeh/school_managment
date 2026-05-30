<div class="flex justify-between items-center mb-6">
    <h4 class="text-lg font-semibold text-gray-800">{{ trans('student.title') }}</h4>
    <div class="flex gap-2">

        @can('Students-Import_Excel')
            @include('backend.Students.import')
        @endcan
        @can('Students-pdf')
            <a href="{{ route('report.export_student') }}" target="_new"
                class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                {{ trans('general.Export_PDF') }}
            </a>
        @endcan
    </div>
</div>
