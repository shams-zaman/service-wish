@if ($paginator->hasPages())
    <style>
        /* ul#horizontal-list li {
            display: inline;
            color: red;
            background-color: green;
        } */

    </style>
    <ul class="horizontal-list" style="" class="pager">

        @if ($paginator->onFirstPage())
            <li style="display:inline; padding:.1rem; background-color:white" class="disabled"><span>←
                    Previous</span></li>
        @else
            <li style="display:inline; padding:.1rem; background-color:white"><a
                    href="{{ $paginator->previousPageUrl() }}" rel="prev">←
                    Previous</a></li>
        @endif



        @foreach ($elements as $element)
            @if (is_string($element))
                <li style="display:inline; padding:.1rem; background-color:white" class="disabled">
                    <span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li style="display:inline; padding:.1rem; background-color:white" class="active my-active">
                            <span>{{ $page }}</span>
                        </li>
                    @else
                        <li style="display:inline; padding:.1rem; background-color:white"><a
                                href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <li style="display:inline; padding:.1rem; background-color:white"><a
                    href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a>
            </li>
        @else
            <li style="display:inline; padding:.1rem; background-color:white" class="disabled"><span>Next →</span>
            </li>
        @endif
    </ul>
@endif
