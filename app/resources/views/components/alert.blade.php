<div x-data="{ isOpen: false, title: '', message: '', type: 'warning', confirmButtonText: 'تأكيد', cancelButtonText: 'إلغاء', onConfirm: null }"
     x-show="isOpen"
     x-cloak
     x-on:show-alert.window="isOpen = true; title = $event.detail.title || 'هل أنت متأكد؟'; message = $event.detail.message || ''; type = $event.detail.type || 'warning'; confirmButtonText = $event.detail.confirmButtonText || 'تأكيد'; cancelButtonText = $event.detail.cancelButtonText || 'إلغاء'; onConfirm = $event.detail.onConfirm || null"
     class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4">

    <div x-show="isOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="isOpen = false"
         class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div x-show="isOpen"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="opacity-100 sm:scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
         class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full p-6 text-center z-10">

        <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-amber-100 mb-4"
             :class="{
                'bg-amber-100 text-amber-600': type === 'warning',
                'bg-red-100 text-red-600': type === 'danger',
                'bg-green-100 text-green-600': type === 'success'
             }">
            <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
        </div>

        <h3 class="text-xl font-bold text-gray-900 mb-2" x-text="title"></h3>
        <p class="text-sm text-gray-500 mb-6" x-text="message"></p>

        <div class="flex justify-center gap-3">
            <button @click="isOpen = false"
                    type="button"
                    class="px-4 py-2 bg-white border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50"
                    x-text="cancelButtonText"></button>

            <button @click="if (onConfirm) onConfirm(); isOpen = false"
                    type="button"
                    class="px-4 py-2 rounded-md text-sm font-medium text-white transition"
                    :class="{
                        'bg-amber-600 hover:bg-amber-700': type === 'warning',
                        'bg-red-600 hover:bg-red-700': type === 'danger',
                        'bg-green-600 hover:bg-green-700': type === 'success'
                    }"
                    x-text="confirmButtonText"></button>
        </div>
    </div>
</div>
