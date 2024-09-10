@if ($paginator->hasPages())
<div class="card-footer clearfix">
    <ul class="pagination pagination-sm m-0 float-right">
        @if ($paginator->onFirstPage())
        <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">«</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">«</a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
            <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">{{ $element }}</a></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page=>$url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">{{ $page }}</a></li>
                    @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
      @if ($paginator->hasMorePages())
      <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">»</a></li>
      @else
      <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">»</a></li>
      @endif
    </ul>
  </div>
@endif