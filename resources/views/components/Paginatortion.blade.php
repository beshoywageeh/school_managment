<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation"
            class="flex justify-between mx-2 mt-4 sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm leading-5 text-gray-700 dark:text-gray-400">
                    {{ trans('pagination.showing') }}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {{ trans('pagination.to') }}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {{ trans('pagination.of') }}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {{ trans('pagination.result') }}
                </p>
            </div>
            <ul class="pagination-list">
                @if ($paginator->onFirstPage())
                    <li class="pagination-item">
                        <span class="pagination-link pagination-link-prev-text">
                            {{ trans('pagination.previous') }}
                        </span>
                    </li>
                @else
                    <li class="pagination-item">
                        <a class="pagination-link pagination-link-prev-text" href="{{ $paginator->previousPageUrl() }}">
                            {{ trans('pagination.previous') }}
                        </a>
                    </li>
                @endif
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="pagination-item disabled"><span>{{ $element }}</span></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="pagination-item active">
                                    <a class="pagination-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @else
                                <li class="pagination-item">
                                    <a class="pagination-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->lastPage())
                    <li class="pagination-item">
                        <span class="pagination-link pagination-link-next-text">
                            {{ trans('pagination.next') }} </sp>
                    </li>
                @else
                    <li class="pagination-item">
                        <a class="pagination-link pagination-link-next-text" href=" {{ $paginator->nextPageUrl() }}">
                            {{ trans('pagination.next') }} </a>
                    </li>
                @endif

            </ul>
        </nav>
    @endif
</div>
