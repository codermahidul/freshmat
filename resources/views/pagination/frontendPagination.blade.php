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

@if ($paginator->hasPages())
<div class="row">
  <div class="pagination mt_25 wow fadeInUp">
      <ul class="pagination justify-content-center">
        @if ($paginator->onFirstPage())
        <li class="page-item">
          <a class="page-link disabled" href="javascript:void(0)" aria-label="Previous">
              <i class="far fa-angle-double-left"></i>
          </a>
        </li>
        @else
        <li class="page-item">
          <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
              <i class="far fa-angle-double-left"></i>
          </a>
        </li>
        @endif
          <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                  <i class="far fa-angle-double-left"></i>
              </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link active" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                  <i class="far fa-angle-double-right"></i>
              </a>
          </li>
      </ul>
  </div>
</div>
@endif