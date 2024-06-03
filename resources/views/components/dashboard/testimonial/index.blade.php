<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">Add New Testimonial</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{ route('testimonial.insert') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" name="designation" placeholder="Designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}">
                @error('designation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>            
            <div class="form-group">
                <label for="quote">Quote</label>
                <textarea name="quote" id="quote" rows="4" class="form-control @error('quote') is-invalid @enderror" placeholder="What client say..">{{ old('quote') }}</textarea>
                @error('quote')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="rating">Rating <small>(Out of 5)</small></label>
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
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title">Slider Item</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name <br> <span>Designation</span></th>
                    <th>Image</th>
                    <th>Quote</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($testimonials as $testimonial)
                    <tr>
                        <td> {{$loop->index +1}} </td>
                        <td> {{$testimonial->name}} <br> <small>{{$testimonial->designation}}</small> </td>
                        <td> 
                            <img src="{{ asset($testimonial->photo) }}" alt="">
                        </td>
                        <td> {{$testimonial->quote}} </a></td>
                        <td> {{$testimonial->rating}} </a></td>
                        <td> {{$testimonial->status}} </a></td>
                        <td class="text-center">
                            <a href="{{route('testimonial.edit',$testimonial->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{route('testimonial.delete',$testimonial->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      @empty 
                      <tr align="center">
                        <td colspan="10" class="py-5">No Testimonial Item! Add New</td>
                      </tr>
                      @endforelse
                </tbody>
              </table>
            </div>
          </div>
                  <!-- Pagination -->
        {{ $testimonials->links('pagination.dashboardPagination') }}
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