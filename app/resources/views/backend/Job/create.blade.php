<div x-data="{ show: false }" x-init="
    window.addEventListener('open-modal-create-job', () => show = true);
    window.addEventListener('close-modal-create-job', () => show = false);
" x-show="show" x-cloak class="fixed inset-0 z-50 overflow-y-auto" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity bg-gray-900/50" aria-hidden="true" @click="show = false"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
        <div x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="relative inline-block align-bottom bg-white rounded-xl shadow-xl max-w-lg w-full transform transition-all sm:align-middle">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h3 class="text-lg font-bold text-gray-800">{{ trans('general.new') }}</h3>
                <button @click="show = false" class="p-1 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="{{ route('jobs.store') }}" method="POST">
                @csrf
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <x-input.job_type />
                        </div>
                        <div>
                            <x-input name="job_name" type="text" value="{{ old('job_name') }}">{{ trans('jobs.job_name') }}</x-input>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-xl">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 font-medium" type="submit">
                        {{ trans('general.Submit') }}
                    </button>
                    <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50" type="button" @click="show = false">
                        {{ trans('general.Cancel') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
