   @if ($paginator->hasPages())
       <ul class="pagination">


           {{-- Pagination Elements --}}
           @foreach ($elements as $element)
               {{-- "Three Dots" Separator --}}
               @if (is_string($element))
                   <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
               @endif

               {{-- Array Of Links --}}
               @if (is_array($element))
                   @foreach ($element as $page => $url)
                       @if ($page == $paginator->currentPage())
                           <li class="active current" aria-current="page"><span>{{ $page }}</span></li>
                       @else
                           <li><a class="page-number" href="{{ $url }}">{{ $page }}</a></li>
                       @endif
                   @endforeach
               @endif
           @endforeach

           {{-- Next Page Link --}}
           @if ($paginator->hasMorePages())
               <li>
                   <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
               </li>
           @else
               <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                   <span aria-hidden="true">&rsaquo;</span>
               </li>
           @endif
       </ul>
   @endif
