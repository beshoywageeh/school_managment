<div x-data="{ toasts: [] }"
    @add-toast.window="toasts.push($event.detail); if (!$event.detail.sticky) { let t = $event.detail; let interval = 50; let step = (interval / (t.duration || 4000)) * 100; let timer = setInterval(() => { let found = toasts.find(to => to.id === t.id); if (!found) { clearInterval(timer); return; } found.progress -= step; if (found.progress <= 0) { clearInterval(timer); toasts = toasts.filter(to => to.id !== t.id); } }, interval); }"
    @remove-toast.window="toasts = toasts.filter(to => to.id !== $event.detail)"
    class="fixed bottom-5 right-5 z-50 flex flex-col gap-3 w-96 max-w-full pointer-events-none">

    <template x-for="toast in toasts" :key="toast.id">
        <div x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:translate-x-4"
            x-transition:enter-end="opacity-100 translate-y-0 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="bg-white border rounded-lg shadow-xl overflow-hidden pointer-events-auto relative flex flex-col">

            <div class="p-4 flex items-start gap-3">

                <div class="flex-shrink-0">
                    <template x-if="toast.type === 'success'">
                        <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </template>
                    <template x-if="toast.type === 'danger'">
                        <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </template>
                    <template x-if="toast.type === 'warning'">
                        <svg class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                        </svg>
                    </template>
                    <template x-if="toast.type === 'info'">
                        <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.852l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12v-.008z" />
                        </svg>
                    </template>
                </div>

                <div class="flex-1 pt-0.5">
                    <p class="text-sm font-medium text-gray-900" x-text="toast.message"></p>
                </div>

                <div class="flex-shrink-0 flex">
                    <button @click="toasts = toasts.filter(to => to.id !== toast.id)"
                        class="inline-flex rounded-md text-gray-400 hover:text-gray-500 focus:outline-none">
                        <span class="sr-only">{{ trans('general.close') }}</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                        </svg>
                    </button>
                </div>
            </div>

            <template x-if="!toast.sticky">
                <div class="h-1 w-full bg-gray-100">
                    <div class="h-full transition-all ease-linear duration-50"
                        :class="{
                            'bg-green-500': toast.type === 'success',
                            'bg-red-500': toast.type === 'danger',
                            'bg-amber-500': toast.type === 'warning',
                            'bg-blue-500': toast.type === 'info'
                        }"
                        :style="`width: ${toast.progress}%`"></div>
                </div>
            </template>
        </div>
    </template>
</div>
