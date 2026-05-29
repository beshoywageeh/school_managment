@props (['can'=>'','titleButton'=>'','title'=>'','id'=>'', 'icon'=>''])
<div x-data="{open:false}">
    @can($can)
        <button x-on:click="open=true"
            class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 flex items-center gap-2">
                @if ($icon)
                <x-hero-icon name="{{ $icon }}"/>
                @endif
                {{$titleButton}}
        </button>
    @endcan

    <div x-show="open"
         x-transition
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
         x-on:click.self="open = false">

        <div x-transition
             class="bg-white rounded-xl shadow-xl w-full max-w-md">

            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center">
                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <h6 class="text-base font-medium text-gray-900">
                        {{ $title }} | {{ $titleButton }}
                    </h6>
                </div>
                <button x-on:click="open = false"
                    class="w-7 h-7 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div>
                {{$slot}}
            </div>


                <div class="flex items-center justify-end gap-2 px-6 py-4 border-t border-gray-100">
                    <button type="button" x-on:click="open = false"
                        class="h-9 px-4 text-sm text-gray-600 rounded-lg border border-gray-200 hover:bg-gray-50 transition-colors">
                        {{ trans('general.Cancel') }}
                    </button>
                    <button type="submit" x-on:click="document.getElementById('{{ $id }}').submit(), open = false"
                        class="h-9 px-4 text-sm font-medium text-white bg-green-600 hover:bg-green-700 rounded-lg transition-colors flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ trans('general.Submit') }}
                    </button>
                </div>
        </div>
    </div>
</div>
