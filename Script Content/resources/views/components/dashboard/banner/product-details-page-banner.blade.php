<section class="cotent p-5">
    {{-- Product Details Page Banner --}}
<div class="card">
    <div class="card-header">
        <h5>{{ __('Product Details Page Banner') }}</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pdpbupdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="shorTitle">{{ __('Short Title') }}</label>
                        <input type="text" class="form-control" placeholder="Short Description"
                            value="{{ $productDetailsBanner->shortTitle }}" name="shortTitlep">
                        @error('shortTitlep')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="offerText">{{ __('Offer Title') }}</label>
                        <input type="text" class="form-control" placeholder="Offer Title"
                            value="{{ $productDetailsBanner->offerText }}" name="offerTextp">
                        @error('offerTextp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link">{{ __('Button Link') }}</label>
                        <input type="text" class="form-control" placeholder="Button Link"
                            value="{{ $productDetailsBanner->link }}" name="linkp">
                        @error('linkp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <h4 class="d-block">{{ __('Previous Background Image') }}</h4>
                        <img src="{{ asset($productDetailsBanner->backgroundImg) }}" alt="" class="img-fluid">
                    </div>
                    <div class="form-group mt-2">
                        <label for="banner">{{ __('Background Image') }}</label>
                        <input type="file" class="form-control" name="backgroundImgp">
                        @error('backgroundImgp')
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

