{{-- Home Three Banner One --}}
<div class="card">
    <div class="card-header">
      <h5>Right Top</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <form action="{{ route('hthboupdate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="shortTitle">Short Title</label>
              <input type="text" class="form-control" placeholder="Short Description" value="{{ $homeThreeRightTopBanner->shortTitle }}" name="shortTitle">
              @error('shortTitle')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>          
            <div class="form-group">
              <label for="offerText">Offer Title</label>
              <input type="text" class="form-control" placeholder="Offer Title" value="{{ $homeThreeRightTopBanner->offerText }}" name="offerText">
              @error('offerText')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="link">Button Link</label>
              <input type="text" class="form-control" placeholder="Button Link" value="{{ $homeThreeRightTopBanner->link }}" name="link">
              @error('link')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div>
              <h4 class="d-block">Previous Background Image</h4>
              <img src="{{ asset($homeThreeRightTopBanner->backgroundImg) }}" alt="" class="img-fluid">
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

{{-- Home Three Banner Two --}}
<div class="card">
    <div class="card-header">
      <h5>Right Bottom</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <form action="{{ route('hthbtupdate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="shortTitle1">Short Title</label>
              <input type="text" class="form-control" placeholder="Short Description" value="{{ $homeThreeRightBottomBanner->shortTitle }}" name="shortTitle1">
              @error('shortTitle1')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>          
            <div class="form-group">
              <label for="offerText1">Offer Title</label>
              <input type="text" class="form-control" placeholder="Offer Title" value="{{ $homeThreeRightBottomBanner->offerText }}" name="offerText1">
              @error('offerText1')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="link1">Button Link</label>
              <input type="text" class="form-control" placeholder="Button Link" value="{{ $homeThreeRightBottomBanner->link }}" name="link1">
              @error('link1')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div>
              <h4 class="d-block">Previous Background Image</h4>
              <img src="{{ asset($homeThreeRightBottomBanner->backgroundImg) }}" alt="" class="img-fluid">
            </div>
            <div class="form-group mt-2">
              <label for="banner">Background Image</label>
              <input type="file" class="form-control" name="backgroundImg1">
              @error('backgroundImg1')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <button class="btn btn-primary">Update Banner</button>
          </form>
        </div>
      </div>
    </div>
</div>

{{-- Home Three Left Banner --}}
<div class="card">
  <div class="card-header">
    <h5>Left Banner</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('hthblupdate') }}" method="post" enctype="multipart/form-data">
          @csrf         
          <div class="form-group">
            <label for="offerTextx">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title" value="{{ $hom3LeftBanner->offerText }}" name="offerTextx">
            @error('offerTextx')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="descriptionx">Description</label>
            <textarea name="descriptionx" id="descriptionx" placeholder="Description" class="form-control" rows="2">{{ $hom3LeftBanner->description }}</textarea>
            @error('descriptionx')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div> 
          <div class="form-group">
            <label for="linkx">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link" value="{{ $hom3LeftBanner->link }}" name="linkx">
            @error('linkx')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <h4 class="d-block">Previous Background Image</h4>
            <img src="{{ asset($hom3LeftBanner->backgroundImg) }}" alt="" class="img-fluid">
          </div>
          <div class="form-group mt-2">
            <label for="banner">Background Image</label>
            <input type="file" class="form-control" name="backgroundImgx">
            @error('backgroundImgx')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <button class="btn btn-primary">Update Banner</button>
        </form>
      </div>
    </div>
  </div>
</div>


{{-- Home Three Middle Banner --}}
<div class="card">
  <div class="card-header">
    <h5>Middle Banner</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('hthbmupdate') }}" method="post" enctype="multipart/form-data">
          @csrf         
          <div class="form-group">
            <label for="offerTexty">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title" value="{{ $hom3MiddleBanner->offerText }}" name="offerTexty">
            @error('offerTexty')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="descriptiony">Description</label>
            <textarea name="descriptiony" id="descriptiony" placeholder="Description" class="form-control" rows="2">{{ $hom3MiddleBanner->description }}</textarea>
            @error('descriptiony')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div> 
          <div class="form-group">
            <label for="linky">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link" value="{{ $hom3MiddleBanner->link }}" name="linky">
            @error('linky')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <h4 class="d-block">Previous Background Image</h4>
            <img src="{{ asset($hom3MiddleBanner->backgroundImg) }}" alt="" class="img-fluid">
          </div>
          <div class="form-group mt-2">
            <label for="banner">Background Image</label>
            <input type="file" class="form-control" name="backgroundImgy">
            @error('backgroundImgy')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <button class="btn btn-primary">Update Banner</button>
        </form>
      </div>
    </div>
  </div>
</div>


{{-- Home Three Right Banner --}}
<div class="card">
  <div class="card-header">
    <h5>Right Banner</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('hthbrupdate') }}" method="post" enctype="multipart/form-data">
          @csrf         
          <div class="form-group">
            <label for="offerTextz">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title" value="{{ $hom3RightBanner->offerText }}" name="offerTextz">
            @error('offerTextz')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="descriptionz">Description</label>
            <textarea name="descriptionz" id="descriptionz" placeholder="Description" class="form-control" rows="2">{{ $hom3RightBanner->description }}</textarea>
            @error('descriptionz')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div> 
          <div class="form-group">
            <label for="linkz">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link" value="{{ $hom3RightBanner->link }}" name="linkz">
            @error('linkz')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <h4 class="d-block">Previous Background Image</h4>
            <img src="{{ asset($hom3RightBanner->backgroundImg) }}" alt="" class="img-fluid">
          </div>
          <div class="form-group mt-2">
            <label for="banner">Background Image</label>
            <input type="file" class="form-control" name="backgroundImgz">
            @error('backgroundImgz')
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