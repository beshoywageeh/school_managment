
<div x-data="{ showModal: false }">
{{-- زرار فتح الموديل --}}
<button
    x-on:click="showModal = true"
    class="flex items-center gap-2 px-4 py-2 bg-primary text-white text-sm font-medium rounded-xl hover:bg-primary/90 transition-colors">
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
    </svg>
    {{ trans('general.Import_Excel') }}
</button>

{{-- الموديل --}}
<div
    x-show="showModal"x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50"
    >

    {{-- Backdrop click to close --}}
    <div class="absolute inset-0" x-on:click="showModal = false"></div>

    {{-- Modal Box --}}
    <div
        
        class="relative w-full max-w-sm bg-white rounded-2xl shadow-xl overflow-hidden"
        dir="rtl">

        {{-- Header --}}
        <div class="flex items-center justify-between px-5 py-4 border-b border-gray-100">
            <h3 class="text-base font-bold text-gray-800">{{ trans('general.Import_Excel') }}</h3>
            <button
                @click="showModal = false"
                class="p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Body --}}
        <form action="{{ route('students.import-excel') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-5">
                <label class="flex flex-col items-center justify-center w-full border-2 border-dashed border-gray-200 rounded-xl p-6 bg-gray-50 hover:bg-gray-100 hover:border-blue-300 transition-colors cursor-pointer gap-2">
                    <svg class="w-8 h-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span class="text-sm text-gray-500">اختر ملف <span class="font-medium text-blue-600">.xlsx</span></span>
                    <input type="file" name="excel" accept=".xlsx" class="hidden"/>
                </label>
            </div>

            {{-- Footer --}}
            <div class="flex items-center justify-between gap-3 px-5 py-4 border-t border-gray-100 bg-gray-50">
                <a href="{{ asset('storage/attachments/upload_templates/Student_Info.xlsx') }}"
                   download
                   class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-blue-600 bg-blue-50 border border-blue-200 rounded-xl hover:bg-blue-100 transition-colors">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    {{ trans('general.download_form') }}
                </a>
                <div class="flex gap-2">
                    <button type="submit"
                        class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-primary rounded-xl hover:bg-primary/90 transition-colors">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                        </svg>
                        {{ trans('general.Submit') }}
                    </button>
                    <button type="button"
                        @click="showModal = false"
                        class="px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-xl hover:bg-gray-100 transition-colors">
                        {{ trans('general.Cancel') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
