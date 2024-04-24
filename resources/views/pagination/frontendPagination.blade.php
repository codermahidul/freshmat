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
        @foreach ($elements as $element)   
          @if (is_string($element))  
          <li class="page-item"><a class="page-link disabled" href="javascript:void(0)">{{ $element }}</a></li>
          @endif
          @if (is_array($element))
          @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
                  <li class="page-item"><a class="page-link active" href="javascript:void(0)">{{ $page }}</a></li>  
                  @else
                  <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>       
                  @endif
              @endforeach
          @endif
        @endforeach
          @if ($paginator->hasMorePages())
          <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                <i class="far fa-angle-double-right"></i>
            </a>
          </li>
          @else
          <li class="page-item">
            <a class="page-link disabled" href="javascript:void(0)" aria-label="Next">
                <i class="far fa-angle-double-right"></i>
            </a>
          </li>
          @endif
      </ul>
  </div>
</div>
@endif