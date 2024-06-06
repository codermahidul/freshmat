<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Video Section</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('h3bvideoUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control" placeholder="Heading" value="{{ $h3bVideo->heading }}">
                        @error('heading')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description"  rows="2" class="form-control" placeholder="Description">{{ $h3bVideo->description }}</textarea>
                    </div>                    
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" id="link" class="form-control" placeholder="Button Link" value="{{ $h3bVideo->link }}">
                        @error('link')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>                    
                    <div class="form-group">
                        <label for="video">YouTube Video Url</label>
                        <input type="text" name="video" id="video" class="form-control" placeholder="YouTube Video Link" value="{{ $h3bVideo->video }}">
                        @error('video')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="img">
                        <label for="backgroundImgP">Previous Background Image</label>
                        <img src="{{ asset($h3bVideo->backgroundImg) }}"  class="d-block img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="backgroundImg">Background Image</label>
                        <input type="file" name="backgroundImg" id="backgroundImg" class="form-control">
                        @error('backgroundImg')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
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