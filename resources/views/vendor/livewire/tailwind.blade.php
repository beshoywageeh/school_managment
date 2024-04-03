@php
   if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp
<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation"
            class="flex justify-between hidden mt-4 sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div class="flex flex-row flex-1 sm:hidden">
                <span>
                    @if ($paginator->onFirstPage())
                        <span
                            class="pagination-link pagination-link-prev-text">
                            {!! __('pagination.previous') !!}
                        </span>
                    @else
                        <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                            class="pagination-link pagination-link-prev-text">
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                </span>
                <span>
                    @if ($paginator->hasMorePages())
                        <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                            class="pagination-link pagination-link-prev-text">
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <span
                            class="pagination-link pagination-link-prev-text">
                            {!! __('pagination.next') !!}
                        </span>
                    @endif
                </span>
            </div>
            <div>
                <p class="text-sm leading-5 text-gray-700">
                    <span>يعرض</span>
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    <span>الي</span>
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    <span>من</span>
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    <span>نتائج</span>
                </p>
            </div>
            <div class=''>
                <span class="relative z-0 inline-flex rounded-md shadow-sm">
                    <span>
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <button class="pagination-link pagination-link-prev-text" aria-disabled="true"> السابق
                            </button>
                        @else
                            <button class="pagination-link pagination-link-prev-text"
                                wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                rel="prev" class="pagination-link pagination-link-prev-text" aria-disabled="true">
                                السابق </button>
                        @endif
                    </span>
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="pagination-link">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                <li class="pagination-item">
                                    <span
                                        wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}">
                                        @if ($page == $paginator->currentPage())
                                            <span aria-current="page">
                                                <span class="pagination-link active">{{ $page }}</span>
                                            </span>
                                        @else
                                            <button type="button"
                                                wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                                x-on:click="{{ $scrollIntoViewJsSnippet }}" class="pagination-link"
                                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </button>
                                        @endif
                                    </span>
                                </li>
                            @endforeach
                        @endif
                    @endforeach
                </span>
                <span>
                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                rel="next" class="pagination-link pagination-link-next-text" aria-label="التالي">
                                التالي
                            </button>
                        @else
                            <span aria-disabled="true" aria-label="التالي">
                                <span class="pagination-link pagination-link-next-text" aria-hidden="true">
                                    التالي
                                </span>
                            </span>
                        @endif
                    </span>
                </span>


            </div>

        </nav>
    @endif
</div>
