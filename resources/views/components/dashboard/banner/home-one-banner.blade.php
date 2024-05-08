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
<div class="card">
  <div class="card-header">
    <h5>Home Page One (Right Banner)</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="post">
          @csrf
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" placeholder="Short Description" name="shortTitle">
            @error('shortTitle')
                <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>          
          <div class="form-group">
            <label for="title">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title">
          </div>
          <div class="form-group">
            <label for="link">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link">
          </div>
          <div class="form-group">
            <label for="banner">Background Image</label>
            <input type="file" name="banner" class="form-control">
          </div>
          <button class="btn btn-primary">Update Banner</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h5>Home Page One (Special Product Left)</h5>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="post">
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" placeholder="Short Description">
          </div>          
          <div class="form-group">
            <label for="title">Offer Title</label>
            <input type="text" class="form-control" placeholder="Offer Title">
          </div>
          <div class="form-group">
            <label for="link">Button Link</label>
            <input type="text" class="form-control" placeholder="Button Link">
          </div>
          <div class="form-group">
            <label for="banner">Background Image</label>
            <input type="file" name="banner" class="form-control">
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