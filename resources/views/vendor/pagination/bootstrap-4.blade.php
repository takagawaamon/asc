@if ($paginator->hasPages())
    <nav class="pt-3">
        <ul class="pagination justify-content-center">
            {{-- First Page Link --}}
            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled': '' }}">
                <a class="page-link" href="{{ $paginator->url(1) }}">
                  ‹‹
                </a>
            </li>
            {{-- Previous Page Link --}}
            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled': '' }}">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                  ‹
                </a>
            </li>

            <li class="page-item active" aria-current="page">
                <span class="page-link">{{ $paginator->currentPage() }}</span>
            </li>

            {{-- Next Page Link --}}
            <li class="page-item {{ $paginator->hasMorePages() ? '': 'disabled' }}">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                  ›
                </a>
            </li>
            {{-- Last Page Link --}}
            <li class="page-item {{ $paginator->hasMorePages() ? '': 'disabled' }}">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="next" aria-label="@lang('pagination.next')">
                  ››
                </a>
            </li>
        </ul>
    </nav>
@endif