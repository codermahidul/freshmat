{{-- Home One Banner One --}}
<div class="card">
  <div class="card-header">
    <h5>Home Page One (Left Banner)</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('hobnupdate') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="shorTitle">Short Title</label>
            <input type="text" class="form-control" placeholder="Short Description" value="{{ $homeOneBannerOne->shortTitle }}" name="shortTitle">
            @error('shortTitle')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>          
          <div class="form-group">
            <label for="offerText">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title" value="{{ $homeOneBannerOne->offerText }}" name="offerText">
            @error('offerText')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="link">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link" value="{{ $homeOneBannerOne->link }}" name="link">
            @error('link')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <h4 class="d-block">Previous Background Image</h4>
            <img src="{{ asset($homeOneBannerOne->backgroundImg) }}" alt="" class="img-fluid">
          </div>
          <div class="form-group mt-2">
            <label for="banner">Background Image</label>
            <input type="file" class="form-control" name="backgroundImg">
            @error('backgroundImg')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <button class="btn btn-primary">Update Banner</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- Home One Banner Two --}}
<div class="card">
  <div class="card-header">
    <h5>Home Page One (Right Banner)</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('hobtupdate') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="shorTitle">Short Title</label>
            <input type="text" class="form-control" placeholder="Short Description" value="{{ $homeOneBannerTwo->shortTitle }}" name="shortTitle2">
            @error('shortTitle2')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>          
          <div class="form-group">
            <label for="offerText">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title" value="{{ $homeOneBannerTwo->offerText }}" name="offerText2">
            @error('offerText2')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="link">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link" value="{{ $homeOneBannerTwo->link }}" name="link2">
            @error('link2')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <h4 class="d-block">Previous Background Image</h4>
            <img src="{{ asset($homeOneBannerTwo->backgroundImg) }}" alt="" class="img-fluid">
          </div>
          <div class="form-group mt-2">
            <label for="banner">Background Image</label>
            <input type="file" class="form-control" name="backgroundImg2">
            @error('backgroundImg2')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <button class="btn btn-primary">Update Banner</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- Home One Banner Special --}}
<div class="card">
  <div class="card-header">
    <h5>Home Page One (Special)</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('hobspecialupdate') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="shorTitle">Short Title</label>
            <input type="text" class="form-control" placeholder="Short Description" value="{{ $homeOneBannerSpecial->shortTitle }}" name="shortTitles">
            @error('shortTitles')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>          
          <div class="form-group">
            <label for="offerText">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title" value="{{ $homeOneBannerSpecial->offerText }}" name="offerTexts">
            @error('offerTexts')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" placeholder="Description" value="{{ $homeOneBannerSpecial->description }}" name="descriptions">
            @error('descriptions')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="link">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link" value="{{ $homeOneBannerSpecial->link }}" name="links">
            @error('links')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <h4 class="d-block">Previous Background Image</h4>
            <img src="{{ asset($homeOneBannerSpecial->backgroundImg) }}" alt="" class="img-fluid">
          </div>
          <div class="form-group mt-2">
            <label for="banner">Background Image</label>
            <input type="file" class="form-control" name="backgroundImgs">
            @error('backgroundImgs')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <button class="btn btn-primary">Update Banner</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- Product Details Page Banner --}}
<div class="card">
  <div class="card-header">
    <h5>Product Details Page Banner</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('pdpbupdate') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="shorTitle">Short Title</label>
            <input type="text" class="form-control" placeholder="Short Description" value="{{ $productDetailsBanner->shortTitle }}" name="shortTitlep">
            @error('shortTitlep')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>          
          <div class="form-group">
            <label for="offerText">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title" value="{{ $productDetailsBanner->offerText }}" name="offerTextp">
            @error('offerTextp')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="link">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link" value="{{ $productDetailsBanner->link }}" name="linkp">
            @error('linkp')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <h4 class="d-block">Previous Background Image</h4>
            <img src="{{ asset($productDetailsBanner->backgroundImg) }}" alt="" class="img-fluid">
          </div>
          <div class="form-group mt-2">
            <label for="banner">Background Image</label>
            <input type="file" class="form-control" name="backgroundImgp">
            @error('backgroundImgp')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <button class="btn btn-primary">Update Banner</button>
        </form>
      </div>
    </div>
  </div>
</div>

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