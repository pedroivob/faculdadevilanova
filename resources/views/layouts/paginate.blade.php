<div class="container">
    @if ($cads->hasPages())
    <div class="pagination-center">
        @if ($cads->lastPage() > 1)
        <ul class="pagination">
            <li class="{{ ($cads->currentPage() == 1) ? ' disabled' : '' }}">
                <a href="{{ $cads->url(1) }}">Anterior </a>
            </li>
            @for ($i = 1; $i <= $cads->lastPage(); $i++)
                <li class="{{ ($cads->currentPage() == $i) ? ' active' : ''     }}">
                    <a href="{{ $cads->url($i) }}"> |{{ $i }}| </a>
                </li>
                @endfor
                <li class="{{ ($cads->currentPage() == $cads->lastPage()) ? ' disabled' : '' }}">
                    <a href="{{ $cads->url($cads->currentPage()+1) }}"> Proximo</a>
                </li>
        </ul>
        @endif
    </div>
    @endif
</div>