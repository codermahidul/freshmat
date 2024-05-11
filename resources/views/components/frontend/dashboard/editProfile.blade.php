<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">
        <div class="dashboard_profile_info">
            <div class="dashboard_profile_info_edit">
                <h2>Edit Information <a href="{{ route('userDashboard') }}">Cancel</a></h2>
                <form class="info_edit_form booking_info_form" method="POST" action="{{ route('profileUpdate') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <input type="text" placeholder="Name" value="{{ Auth::user()->name }}" name="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-xl-6">
                            <input type="email" placeholder="Email" value="{{ Auth::user()->email }}" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="+880 Enter phone number" value="{{ Auth::user()->userProfile->phone }}" name="phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-xl-6">
                            <input type="text" placeholder="City" value="{{ Auth::user()->userProfile->city }}" name="city">
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-xl-12">
                            <textarea name="address" rows="6"
                                placeholder="441, 4th street, Washington DC, USA">{{ Auth::user()->userProfile->address }}</textarea>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                            <button type="submit" class="common_btn">Save Profile
                                <span></span></button>
                        </div>
                    </div>
                </form>
                @if (session('success'))
                    <span class="text-success">{{ session('success') }}</span>
                @endif
            </div>
        </div>
    </div>
</div>