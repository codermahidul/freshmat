<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">About Us Page</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="shortTitle">Short Title</label>
                <input type="text" name="shortTitle" placeholder="Short Title" class="form-control @error('shortTitle') is-invalid @enderror" value="{{ $contents->shortTitle }}">
                @error('shortTitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Designation</label>
                <input type="text" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ $contents->title }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>            
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{ $contents->description }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="image">
                <label class="d-block" for="oldImage">Old Image</label>
                <img src="{{ asset($contents->image) }}" alt="">
            </div>
            <div class="form-group">
                <label for="image">Upload New Image</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="listItemOne">List Item One</label>
                        <input type="text" name="listItemOne" id="listItemOne" class="form-control @error('listItemOne') is-invalid @enderror" placeholder="List Item One" value="{{ $contents->listItemOne }}">
                        @error('listItemOne')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="listItemTwo">List Item Two</label>
                        <input type="text" name="listItemTwo" id="listItemTwo" class="form-control @error('listItemTwo') is-invalid @enderror" placeholder="List Item Two" value="{{ $contents->listItemTwo }}">
                        @error('listItemTwo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="listItemThree">List Item Three</label>
                        <input type="text" name="listItemThree" id="listItemThree" class="form-control @error('listItemThree') is-invalid @enderror" placeholder="List Item Three" value="{{ $contents->listItemThree }}">
                        @error('listItemThree')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="listItemFour">List Item Four</label>
                        <input type="text" name="listItemFour" id="listItemFour" class="form-control @error('listItemFour') is-invalid @enderror" placeholder="List Item Four" value="{{ $contents->listItemFour }}">
                        @error('listItemFour')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="rating">dfgdf</label>
                <input type="number" step="0.1" name="rating" placeholder="Rating" class="form-control @error('rating') is-invalid @enderror" value="{{ old('rating') }}">
                @error('rating')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Slider Image</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="Status">Status</label>
                <select name="status" class="form-control">
                    <option value="active" selected>Active</option>
                    <option value="deactive">Deactive</option>
                </select>
            </div>
            <button class="btn btn-primary">Add Testimonial</button>
          </form>
        </div>
    
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
        @if (session('error'))
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
              icon: 'error',
              title: "{{ session('error') }}",
            })
          </script>
        @endif