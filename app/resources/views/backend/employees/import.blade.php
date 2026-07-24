<div x-data="{ showImportModal: false }">
    <button type="button" x-on:click="showImportModal = true"
        class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
        </svg>
        {{ trans('general.Import_Excel') }}
    </button>

    <div x-show="showImportModal" x-transition
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
        x-on:click.self="showImportModal = false"
        style="display: none;">
        <div class="bg-white rounded-xl shadow-xl w-full max-w-md overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-bold text-gray-800">{{ trans('general.Import_Excel') }}</h3>
                <button type="button" @click="showImportModal = false"
                    class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('employees.import-excel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-1">
                            <input type="file" name="excel" multiple
                                accept="application/csvm+json,application/xlsx"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary"
                                id="inputGroupFile02">
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <a href="{{ asset('storage/attachments/upload_templates/Parents_Info.xlsx') }}" download
                        class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium">{{ trans('general.download_form') }}</a>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium" type="submit">{{ trans('general.Submit') }}</button>
                        <button type="button" @click="showImportModal = false"
                            class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg font-medium">{{ trans('general.Cancel') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>