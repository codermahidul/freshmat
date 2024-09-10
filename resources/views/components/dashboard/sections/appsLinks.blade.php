<section class="content p-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title mb-0">{{ __('Home One Video Gallery') }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('appLinksUpdate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="shortTitle">{{ __('Short Title') }}</label>
                    <input type="text" class="form-control" placeholder="Short Title" name="shortTitle"
                        value="{{ appSection()->shortTitle }}">
                    @error('shortTitle')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="offerText">{{ __('Offer Text') }}</label>
                    <input type="text" class="form-control" placeholder="Offer Text" name="offerText"
                        value="{{ appSection()->offerText }}">
                    @error('offerText')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">{{ __('Description') }}</label>
                    <textarea name="description" class="form-control" rows="4">{{ appSection()->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="playLink">{{ __('Play Store App Link') }}</label>
                    <input type="text" class="form-control" placeholder="Android App Link" name="playLink"
                        value="{{ appSection()->playLink }}">
                    @error('playLink')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="link">{{ __('Apple Store App Link') }}</label>
                    <input type="text" class="form-control" placeholder="Apple App Link" name="appleLink"
                        value="{{ appSection()->appleLink }}">
                    @error('appleLink')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @if (setting('theme') == 'all' || setting('theme') == 'one')
                    <div class="thumbnail">
                        <label for="homeOneAppImage">{{ __('Home One App Section Image') }}</label>
                        <img src="{{ asset(appSection()->image) }}" class="d-block">
                    </div>
                    <div class="form-group">
                        <label for="image">{{ __('Home One App Image') }}</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
                @if (setting('theme') == 'all' || setting('theme') == 'three')
                    <div class="thumbnail">
                        <label for="homeThreeAppImage">{{ __('Home Three App Section Image') }}</label>
                        <img src="{{ asset(appSection()->image2) }}" class="d-block">
                    </div>
                    <div class="form-group mt-4">
                        <label for="image2">{{ __('Home Three App Image') }}</label>
                        <input type="file" class="form-control" name="image2">
                        @error('image2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
                <button class="btn btn-primary">{{ __('Update Section') }}</button>
            </form>
        </div>
    </div>
</section>
@if (session('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        })

        Toast.fire({
            icon: 'success',
            title: "{{ session('success') }}",
        })
    </script>
@endif
