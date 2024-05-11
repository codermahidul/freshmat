<div class="card">
    <div class="card-header">
        <h2 class="card-title">Home One Video Gallery</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('hovgUpdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="shortTitle">Short Title</label>
                <input type="text" class="form-control" placeholder="Short Title" name="shortTitle" value="{{ $hovg->shortTitle }}">
                @error('shortTitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="offerText">Offer Text</label>
                <input type="text" class="form-control" placeholder="Offer Text" name="offerText" value="{{ $hovg->offerText }}">
                @error('offerText')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="4">{{ $hovg->description }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="link">Button Link</label>
                <input type="text" class="form-control" placeholder="Button Link" name="link" value="{{ $hovg->link }}">
                @error('link')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="thumbnail">
                <img src="{{ asset($hovg->thumbnail1) }}" alt="">
            </div>
            <div class="form-group">
                <label for="thumbnail1">Thumbnail (1)</label>
                <input type="file" class="form-control"  name="thumbnail1">
                @error('thumbnail1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="video1">Video 1 (Link)</label>
                <input type="text" class="form-control" placeholder="Youtube Video Link" name="video1" value="{{ $hovg->video1 }}">
                @error('video1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="thumbnail">
                <img src="{{ asset($hovg->thumbnail2) }}" alt="">
            </div>
            <div class="form-group">
                <label for="thumbnail2">Thumbnail (2)</label>
                <input type="file" class="form-control"  name="thumbnail2">
                @error('thumbnail2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="video2">Video 2 (2)</label>
                <input type="text" class="form-control" placeholder="Youtube Video Link" name="video2" value="{{ $hovg->video2 }}">
                @error('video2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="thumbnail">
                <img src="{{ asset($hovg->thumbnail3) }}" alt="">
            </div>
            <div class="form-group">
                <label for="thumbnail3">Thumbnail (3)</label>
                <input type="file" class="form-control"  name="thumbnail3">
                @error('thumbnail3')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="video3">Video 3 (Link)</label>
                <input type="text" class="form-control" placeholder="Youtube Video Link" name="video3" value="{{ $hovg->video3 }}">
                @error('video3')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="thumbnail">
                <img src="{{ asset($hovg->thumbnail4) }}" alt="">
            </div>
            <div class="form-group">
                <label for="thumbnail4">Thumbnail (4)</label>
                <input type="file" class="form-control"  name="thumbnail4">
                @error('thumbnail4')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="video4">Video 4 (Link)</label>
                <input type="text" class="form-control" placeholder="Youtube Video Link" name="video4" value="{{ $hovg->video4 }}">
                @error('video4')
                    <span class="text-danger">{{ $message }}</span>
                 @enderror
            </div>
            <button class="btn btn-primary">Update Section</button>
        </form>
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