@if ($paginator->lastPage() > 1)
<ul>
    <li>
        <a href="{{ ($paginator->currentPage() == 1) ? $paginator->url($paginator->lastPage()) : $paginator->url($paginator->currentPage()-1) }}">
            <span><i class="far fa-angle-double-left"></i></span>
        </a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li>
            <a href="{{ $paginator->url($i) }}">
                <span class="{{ ($paginator->currentPage() == $i) ? 'current' : '' }}">{{ $i }}</span></a>
            </a>
        </li>
    @endfor
    <li>
        <a href="{{ ($paginator->currentPage() == $paginator->lastPage()) ? $paginator->url(1) : $paginator->url($paginator->currentPage()+1) }}">
            <span><i class="far fa-angle-double-right"></i></span>
        </a>
    </li>
</ul>
@endif