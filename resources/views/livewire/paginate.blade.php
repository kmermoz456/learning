@if($paginator->hasPages())

<div>
        <ul class="pagination">
        @if (!$paginator->onFirstPage())
            <li><a wire:click="previousPage('{{ $paginator->getPageName() }}')" class="rounded shadow px-3 py-2 hover:shadow-lg hover:bg-purple-900 hover:text-white" ><</a></li>
          @endif
          {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                         {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
            <li><a  class="rounded shadow px-3 py-2  bg-purple-900 text-white" >{{$page}}</a></li>
                            @else
            <li><a   wire:click="gotoPage({{$page}})" class="rounded shadow px-3 py-2  hover:bg-purple-900 hover:text-white" >{{$page}}</a></li>
                           
                            @endif
                        @endforeach
                    @endif
        @endforeach
            @if ($paginator->hasMorePages())
            <li><a  wire:click="nextPage" class="rounded shadow px-3 py-2 hover:shadow-lg hover:bg-purple-900 hover:text-white" >></a></li>
            @endif
        </ul>

</div>

@endif
