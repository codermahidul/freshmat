<section class="content p-5">
{{-- Home Two Banner One --}}
<div class="card">
    <div class="card-header">
        <h5>{{ __('Home Two Slider') }}</h5>
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

</section>
