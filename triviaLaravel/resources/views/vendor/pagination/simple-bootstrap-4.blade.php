@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}} @if ($paginator->onFirstPage())
        <li class="page-item disabled" aria-disabled="true">
            <strong class="page-link btn btn-sm" style="background-color: #000; font-size: 10px; font-family: 'Press Start 2P';">@lang('pagination.previous')</strong>
        </li>
        @else
        <li class="page-item">
            <a class="page-link text-white btn btn-sm" style="background-color: #000; font-size: 10px;" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
        </li>
        @endif {{-- Next Page Link --}} @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link text-white btn btn-sm" style="background-color: #000; font-size: 10px;" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
        </li>
        @else
        <li class="page-item disabled" aria-disabled="true">
            <strong class="page-link btn btn-sm" style="background-color: #000; font-size: 10px; font-family: 'Press Start 2P'">@lang('pagination.next')</strong>
        </li>
        @endif
    </ul>
@endif