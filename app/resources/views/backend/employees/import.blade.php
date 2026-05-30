<div class="modal fade" id="Import_Excel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="relative flex flex-col w-full bg-white rounded-lg shadow-xl border-0">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800">{{ trans('general.Import_Excel') }}</h3>
                <button type="button" class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100" data-dismiss="modal">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('employees.import_excel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-1">
                            <input type="file" name="excel" multiple
                                accept="application/csvm+json,application/xlsx"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                                id="inputGroupFile02">
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <a href="{{ asset('storage/attachments/upload_templates/Parents_Info.xlsx') }}" download
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-medium">{{ trans('general.download_form') }}</a>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-medium" type="submit">{{ trans('general.Submit') }}</button>
                        <button class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 font-medium" data-dismiss="modal">{{ trans('general.Cancel') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>