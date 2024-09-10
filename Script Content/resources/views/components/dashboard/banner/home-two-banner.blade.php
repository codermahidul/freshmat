<section class="content p-5">
    {{-- Home Two Banner One --}}
<div class="card">
    <div class="card-header">
        <h5>{{ __('Main Banner') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('htbmainUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="shortTitle0">{{ __('Short Title') }}</label>
                        <input type="text" class="form-control" placeholder="Short Description"
                            value="{{ $homeTwoMainBanner->shortTitle }}" name="shortTitle0">
                        @error('shortTitle0')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="offerText0">{{ __('Offer Title') }}</label>
                        <input type="text" class="form-control" placeholder="Offer Title"
                            value="{{ $homeTwoMainBanner->offerText }}" name="offerText0">
                        @error('offerText0')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description0">{{ __('Description') }}</label>
                        <input type="text" class="form-control" placeholder="Description"
                            value="{{ $homeTwoMainBanner->description }}" name="description0">
                        @error('description0')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link0">{{ __('Button Link') }}</label>
                        <input type="text" class="form-control" placeholder="Button Link"
                            value="{{ $homeTwoMainBanner->link }}" name="link0">
                        @error('link0')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <h4 class="d-block">{{ __('Previous Background Image') }}</h4>
                        <img src="{{ asset($homeTwoMainBanner->backgroundImg) }}" alt="" class="img-fluid">
                    </div>
                    <div class="form-group mt-2">
                        <label for="banner">{{ __('Background Image') }}</label>
                        <input type="file" class="form-control" name="backgroundImg0">
                        @error('backgroundImg0')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">{{ __('Update Banner') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Home Two Banner One --}}
<div class="card mt-5">
    <div class="card-header">
        <h5>{{ __('Left Banner') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('htboUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="shortTitle1">{{ __('Short Title') }}</label>
                        <input type="text" class="form-control" placeholder="Short Description"
                            value="{{ $homeTwoLeftBanner->shortTitle }}" name="shortTitle1">
                        @error('shortTitle1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="offerText1">{{ __('Offer Title') }}</label>
                        <input type="text" class="form-control" placeholder="Offer Title"
                            value="{{ $homeTwoLeftBanner->offerText }}" name="offerText1">
                        @error('offerText1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description1">{{ __('Description') }}</label>
                        <input type="text" class="form-control" placeholder="Description"
                            value="{{ $homeTwoLeftBanner->description }}" name="description1">
                        @error('description1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link1">{{ __('Button Link') }}</label>
                        <input type="text" class="form-control" placeholder="Button Link"
                            value="{{ $homeTwoLeftBanner->link }}" name="link1">
                        @error('link1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <h4 class="d-block">{{ __('Previous Background Image') }}</h4>
                        <img src="{{ asset($homeTwoLeftBanner->backgroundImg) }}" alt="" class="img-fluid">
                    </div>
                    <div class="form-group mt-2">
                        <label for="banner">{{ __('Background Image') }}</label>
                        <input type="file" class="form-control" name="backgroundImg1">
                        @error('backgroundImg1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">{{ __('Update Banner') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Home Two Banner Two --}}
<div class="card mt-5">
    <div class="card-header">
        <h5>{{ __('Right Top Banner') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('htbtUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="shortTitle2">{{ __('Short Title') }}</label>
                        <input type="text" class="form-control" placeholder="Short Description"
                            value="{{ $homeTwoRightTopBanner->shortTitle }}" name="shortTitle2">
                        @error('shortTitle2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="offerText2">{{ __('Offer Title') }}</label>
                        <input type="text" class="form-control" placeholder="Offer Title"
                            value="{{ $homeTwoRightTopBanner->offerText }}" name="offerText2">
                        @error('offerText2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description2">{{ __('Description') }}</label>
                        <input type="text" class="form-control" placeholder="Description"
                            value="{{ $homeTwoRightTopBanner->description }}" name="description2">
                        @error('description2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link2">{{ __('Button Link') }}</label>
                        <input type="text" class="form-control" placeholder="Button Link"
                            value="{{ $homeTwoRightTopBanner->link }}" name="link2">
                        @error('link2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <h4 class="d-block">{{ __('Previous Background Image') }}</h4>
                        <img src="{{ asset($homeTwoRightTopBanner->backgroundImg) }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="form-group mt-2">
                        <label for="banner">{{ __('Background Image') }}</label>
                        <input type="file" class="form-control" name="backgroundImg2">
                        @error('backgroundImg2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">{{ __('Update Banner') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- Home Two Banner Three --}}
<div class="card mt-5">
    <div class="card-header">
        <h5>{{ __('Right Top Banner') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('htbthUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="shortTitle3">{{ __('Short Title') }}</label>
                        <input type="text" class="form-control" placeholder="Short Description"
                            value="{{ $homeTwoRightBottomBanner->shortTitle }}" name="shortTitle3">
                        @error('shortTitle3')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="offerText3">{{ __('Offer Title') }}</label>
                        <input type="text" class="form-control" placeholder="Offer Title"
                            value="{{ $homeTwoRightBottomBanner->offerText }}" name="offerText3">
                        @error('offerText3')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description3">{{ __('Description') }}</label>
                        <input type="text" class="form-control" placeholder="Description"
                            value="{{ $homeTwoRightBottomBanner->description }}" name="description3">
                        @error('description3')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link3">{{ __('Button Link') }}</label>
                        <input type="text" class="form-control" placeholder="Button Link"
                            value="{{ $homeTwoRightBottomBanner->link }}" name="link3">
                        @error('link3')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <h4 class="d-block">{{ __('Previous Background Image') }}</h4>
                        <img src="{{ asset($homeTwoRightBottomBanner->backgroundImg) }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="form-group mt-2">
                        <label for="banner">{{ __('Background Image') }}</label>
                        <input type="file" class="form-control" name="backgroundImg3">
                        @error('backgroundImg3')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">{{ __('Update Banner') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Home Two Barnd Product (Middle Banner) --}}
<div class="card mt-5">
    <div class="card-header">
        <h5>{{ __('Bestseller Product (Left Banner)') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('htbsUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="shortTitle4">{{ __('Short Title') }}</label>
                        <input type="text" class="form-control" placeholder="Short Description"
                            value="{{ $homeTwoSpecialBanner->shortTitle }}" name="shortTitle4">
                        @error('shortTitle4')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="offerText4">{{ __('Offer Title') }}</label>
                        <input type="text" class="form-control" placeholder="Offer Title"
                            value="{{ $homeTwoSpecialBanner->offerText }}" name="offerText4">
                        @error('offerText4')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link4">{{ __('Button Link') }}</label>
                        <input type="text" class="form-control" placeholder="Button Link"
                            value="{{ $homeTwoSpecialBanner->link }}" name="link4">
                        @error('link4')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <h4 class="d-block">{{ __('Previous Background Image') }}</h4>
                        <img src="{{ asset($homeTwoSpecialBanner->backgroundImg) }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="form-group mt-2">
                        <label for="banner">{{ __('Background Image') }}</label>
                        <input type="file" class="form-control" name="backgroundImg4">
                        @error('backgroundImg4')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">{{ __('Update Banner') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Home Two Banner Two --}}
<div class="card mt-5">
    <div class="card-header">
        <h5>{{ __('Barnd Product (Middle Banner)') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('htbbsUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="offerText5">{{ __('Offer Title') }}</label>
                        <input type="text" class="form-control" placeholder="Offer Title"
                            value="{{ $homeTwoBSBanner->offerText }}" name="offerText5">
                        @error('offerText5')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description5">{{ __('Description') }}</label>
                        <input type="text" class="form-control" placeholder="Description"
                            value="{{ $homeTwoBSBanner->description }}" name="description5">
                        @error('description5')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link5">{{ __('Button Link') }}</label>
                        <input type="text" class="form-control" placeholder="Button Link"
                            value="{{ $homeTwoBSBanner->link }}" name="link5">
                        @error('link5')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <h4 class="d-block">{{ __('Previous Background Image') }}</h4>
                        <img src="{{ asset($homeTwoBSBanner->backgroundImg) }}" alt="" class="img-fluid">
                    </div>
                    <div class="form-group mt-2">
                        <label for="banner">{{ __('Background Image') }}</label>
                        <input type="file" class="form-control" name="backgroundImg5">
                        @error('backgroundImg5')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">{{ __('Update Banner') }}</button>
                </form>
            </div>
        </div>
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
