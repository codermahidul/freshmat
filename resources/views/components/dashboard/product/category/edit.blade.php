<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 m-auto">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit <b>'{{$category->name}}'</b> Category</h3>
            </div>
            <form action="{{route('productcategoryupdate',$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="question" placeholder="Enter Category" name="name" value="{{old('name')}}{{$category->name}}">
                @error('name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Category Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="question" placeholder="Enter Slug" name="slug" value="{{old('slug')}}{{$category->slug}}">
                  @error('slug')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>

                  <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="icon">Category Icon</label>
                            <input type="file" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{old('icon')}}">
                          @error('icon')
                              <span class="text-danger">
                                  {{$message}}
                              </span>
                          @enderror
                          </div>
                    </div>
                    <div class="col-md-4 text-center mt-2">
                        <img src="{{ asset($category->icon) }}" class="img-thumbnail" alt="">
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
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>