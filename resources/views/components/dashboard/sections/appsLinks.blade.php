<div class="card">
    <div class="card-header">
        <h2 class="card-title">Home One Video Gallery</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('appLinksUpdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="shortTitle">Short Title</label>
                <input type="text" class="form-control" placeholder="Short Title" name="shortTitle" value="{{ appSection()->shortTitle }}">
                @error('shortTitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="offerText">Offer Text</label>
                <input type="text" class="form-control" placeholder="Offer Text" name="offerText" value="{{ appSection()->offerText }}">
                @error('offerText')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="4">{{ appSection()->description }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="playLink">Play Store App Link</label>
                <input type="text" class="form-control" placeholder="Android App Link" name="playLink" value="{{ appSection()->playLink }}">
                @error('playLink')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="link">Apple Store App Link</label>
                <input type="text" class="form-control" placeholder="Apple App Link" name="appleLink" value="{{ appSection()->appleLink }}">
                @error('appleLink')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="thumbnail">
                <img src="{{ asset(appSection()->image) }}" alt="">
            </div>
            <div class="form-group">
                <label for="image">Left Side Image</label>
                <input type="file" class="form-control"  name="image">
                @error('image')
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