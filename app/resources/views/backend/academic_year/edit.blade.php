<x-modal id="editAcademicYear_{{ $acadmice_year->id }}" title="{{ trans('academic_year.title') }} | {{ trans('general.edit') }}" can="academic_year-edit" icon="pencil" size="md">
    <form action="{{ route('academic-year.update', $acadmice_year->id) }}" method="post" id="editAcademicYear_{{ $acadmice_year->id }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $acadmice_year->id }}">
        <div class="px-6 py-5 space-y-4">
            <div class="grid grid-cols-2 gap-3">
                <div class="space-y-1.5">
                    <label class="text-xs font-medium text-gray-500">{{ trans('academic_year.year_start') }}</label>
                    <input name="year_start" type="date" value="{{ $acadmice_year->year_start }}"
                        class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
                </div>
                <div class="space-y-1.5">
                    <label class="text-xs font-medium text-gray-500">{{ trans('academic_year.year_end') }}</label>
                    <input name="year_end" type="date" value="{{ $acadmice_year->year_end }}"
                        class="w-full h-9 rounded-lg border border-gray-200 bg-white text-sm text-gray-900 px-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
                </div>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" name="status" id="edit_status_{{ $acadmice_year->id }}"
                    class="w-4 h-4 accent-blue-600 rounded" @checked($acadmice_year->status == 1)>
                <label for="edit_status_{{ $acadmice_year->id }}" class="text-sm text-gray-700">{{ trans('academic_year.status') }}</label>
            </div>
        </div>
    </form>
    </x-modal>
