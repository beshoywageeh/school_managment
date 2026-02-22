<div>
    @if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation"
    class="flex justify-between mt-4 sm:flex-1 sm:flex sm:items-center sm:justify-between mx-2">
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
            <ul class="pagination-list">
                <li class="pagination-item">
                    <button class="pagination-link pagination-link-prev-icon" wire:click="previousPage('{{ $paginator->getPageName() }}')">
                        {{trans('pagination.previous') }}
                    </button>
                </li>
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="pagination-item disabled"><span>{{ $element }}</span></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="pagination-item active"><button class="pagination-link"  wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</button></li>
                            @else
                                <li wire:key="paginator-{{ $paginator->getPageName() }} class="pagination-item"><button class="pagination-link"  wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</button></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                <li class="pagination-item">
                    <button class="pagination-link pagination-link-next-icon" wire:click="nextPage('{{ $paginator->getPageName() }}')">
                        {{trans('pagination.next') }}
                    </button>
                </li>
            </ul>



    </nav>

    @endif
</div>


