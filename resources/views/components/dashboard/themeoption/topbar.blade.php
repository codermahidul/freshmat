<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Contact Info</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('topbarUpdate') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ topbarContent('phone') }}">
                                @error('phone')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ topbarContent('email') }}">
                                @error('email')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" name="location" id="location" class="form-control" placeholder="Location" value="{{ topbarContent('location') }}">
                                @error('location')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Social Links</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('socialLinkInsert') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="icon">Social Media</label>
                                <select name="icon" id="icon" class="form-control">
                                    <option value="fab fa-facebook-f">Facebook</option>
                                    <option value="fab fa-twitter">Twitter</option>
                                    <option value="fab fa-linkedin-in">Linkedin</option>
                                    <option value="fab fa-instagram">Instagram</option>
                                    <option value="fab fa-youtube">YouTube</option>
                                    <option value="fab fa-pinterest-p">Pinterest</option>
                                    <option value="fab fa-snapchat-ghost">Snapchat</option>
                                    <option value="fab fa-tiktok">TikTok</option>
                                    <option value="fab fa-reddit-alien">Reddit</option>
                                </select>
                                @error('icon')
                                 <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" name="link" id="link" class="form-control" placeholder="Enter Your Link">
                                @error('link')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-center mt-3">
                            <button type="submit" class="btn btn-primary">Add New</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <table class="table table-borderd">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Social Media</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (socialLinks() as $item)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td><i class="btn btn-secondary {{ $item->icon }}"></i></td>
                                <td>
                                    <a class="btn-sm btn btn-primary" target="_blank" href="{{ $item->url }}"><i class="fas fa-eye"></i></a>
                                </td>
                                <td class="text-center">
                                    {{-- <a href="" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a> --}}
                                    <a href="{{ route('socialLinkDelete',$item->id) }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>No Social Links found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
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