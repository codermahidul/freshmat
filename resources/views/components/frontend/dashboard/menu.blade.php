<div class="col-xl-3 col-lg-4 wow fadeInLeft">
    <div class="dashboard_sidebar">
        <div class="dashboard_sidebar_user">
            <div class="img">
                <img src="{{ asset('assets') }}/images/dashboard_user_img.png" alt="dashboard" class="img-fluid w-100">
                <label for="profile_photo"><i class="far fa-camera"></i></label>
                <input type="file" id="profile_photo" hidden>
            </div>
            <h3>{{ Auth::user()->name }}</h3>
            <p>Paris, France</p>
        </div>
        <div class="dashboard_sidebar_menu">
            <ul>
                <li><a class="{{ Route::currentRouteNamed('userDashboard') ? 'active':''}}" href="{{ route('userDashboard') }}"><i class="fas fa-user"></i> Personal
                        Info</a></li>
                <li><a class="{{ Route::currentRouteNamed('userOrder') ? 'active':''}}" href="{{ route('userOrder') }}"><i class="fas fa-shopping-basket"></i> Order</a></li>
                <li><a class="{{ Route::currentRouteNamed('userReview') ? 'active':''}}" href="{{ route('userReview') }}"><i class="fas fa-star"></i> Reviews</a></li>
                <li><a class="{{ Route::currentRouteNamed('userWishlist') ? 'active':''}}" href="{{ route('userWishlist') }}"><i class="fas fa-heart"></i> Wishlist</a></li>
                <li><a class="{{ Route::currentRouteNamed('userPasswordChange') ? 'active':''}}" href="{{ route('userPasswordChange') }}"><i class="fas fa-key"></i> Change
                        Password</a></li>
                <li><a href="{{ route('logout') }}" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i
                            class="fas fa-sign-out-alt"></i> Logout</a></li>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
             </form>
            </ul>
        </div>
    </div>
</div>