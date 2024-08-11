<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">
        <h2 class="dashboard_title">Reviews</h2>
        <div class="dashboard_reviews">
            @forelse ($reviews as $review)
            <div class="single_review">
                <div class="img">
                    <img src="{{ asset(Auth::user()->userProfile->photo) }}" alt="Reviewer" class="img-fluid w-100">
                </div>
                <div class="text">
                    <h4>{{ Auth::user()->name }} <span>{{ $review->created_at->format('d-M-Y') }}</span></h4>
                    <span class="rating">
                        @for ($i = 0; $i < $review->rating; $i++)
                        <i class="fas fa-star"></i>
                        @endfor
                    </span>
                    <p>{{ $review->review }}</p>
                </div>
            </div>
            @empty
                No review found!
            @endforelse
            {{-- Pagination --}}
            {{ $reviews->links('pagination.frontendPagination') }}
        </div>
    </div>
</div>
