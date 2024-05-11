<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">

        <p class="welcome">{{ Auth::user()->name }}</p>
        <h2 class="dashboard_title">Welcome To Your Profile</h2>

        <div class="dashboard_profile_info">

            <div class="row mt_15">
                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                    <div class="profile_overview_item">
                        <span><i class="fas fa-shopping-basket"></i></span>
                        <h3>{{ $activeOrder }}</h3>
                        <p>Order Active</p>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                    <div class="profile_overview_item">
                        <span><i class="fas fa-box-check"></i></span>
                        <h3>{{ $completedOrder }}</h3>
                        <p>Order Completed</p>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                    <div class="profile_overview_item">
                        <span><i class="fas fa-clipboard-list-check"></i></span>
                        <h3>{{ $totalOrder }}</h3>
                        <p>Total Order </p>
                    </div>
                </div>
            </div>

            <div class="dashboard_profile_info_list mt_25 wow fadeInUp">
                <h2>Personal Information <a href="{{ route('editProfile') }}">Edit</a></h2>
                <ul>
                    <li><span>Name:</span> {{ Auth::user()->name }}</li>
                    <li><span>Email:</span> {{ Auth::user()->email }}</li>
                    <li><span>Phone:</span> {{ Auth::user()->userProfile->phone }}</li>
                    <li><span>City:</span> {{ Auth::user()->userProfile->city }}</li>
                    {{-- <li><span>Country:</span> USA</li> --}}
                    <li><span>Address:</span> {{ Auth::user()->userProfile->address }}</li>
                </ul>
            </div>

        </div>
    </div>
</div>