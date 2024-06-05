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

{{-- Home Three Banner One --}}
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