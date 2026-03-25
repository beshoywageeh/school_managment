<div>
    @if ($paginator->hasPages())
        <nav aria-label="Pagination">
            <ul class="pagination justify-content-between flex-wrap">
                <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $paginator->onFirstPage() ? '#' : $paginator->previousPageUrl() }}"
                        tabindex="-1">
                        {{ trans('pagination.previous') }}
                    </a>
                </li>

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
                    @endif
                @endforeach

                <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $paginator->hasMorePages() ? $paginator->nextPageUrl() : '#' }}">
                        {{ trans('pagination.next') }}
                    </a>
                </li>
            </ul>
            <div class="mt-2">
                <small class="text-muted">
                    {{ trans('pagination.showing') }}
                    @if ($paginator->firstItem())
                        <strong>{{ $paginator->firstItem() }}</strong>
                        {{ trans('pagination.to') }}
                        <strong>{{ $paginator->lastItem() }}</strong>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {{ trans('pagination.of') }}
                    <strong>{{ $paginator->total() }}</strong>
                    {{ trans('pagination.result') }}
                </small>
            </div>
        </nav>


    @endif
</div>
