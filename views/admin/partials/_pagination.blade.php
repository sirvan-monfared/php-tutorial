<nav class="custom-pagination mt-3">
    <ul class="pagination justify-content-center">
        @if($paginator->hasPrevPage())
            <li class="page-item d-flex align-items-center justify-content-center">
                <a class="page-link" href="{{ $paginator->prevUrl() }}">
                    <<
                </a>
            </li>
        @endif

        @if($paginator->lastPage() > 1)
            @for($i = 1; $i <= $paginator->lastPage(); $i++)
                <li @class(['active' => $paginator->isCurrentPage($i)])>
                    <a class="page-link" href="{{ $paginator->generateUrl($i) }}">
                        {{ $i }}
                    </a>
                </li>
            @endfor
        @endif

        @if($paginator->hasNextPage())
            <li class="page-item d-flex align-items-center justify-content-center">
                <a class="page-link" href="{{ $paginator->nextUrl() }}"> >> </a>
            </li>
        @endif
    </ul>
</nav>