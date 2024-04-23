<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 m-auto">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Category</h3>
            </div>
            <form action="{{route('productCategoryStore')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="question" placeholder="Enter Category" name="name" value="{{old('name')}}">
                @error('name')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Category Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="question" placeholder="Enter Slug" name="slug" value="{{old('slug')}}">
                  @error('slug')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label for="icon">Category Icon</label>
                    <input type="file" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{old('icon')}}">
                  @error('icon')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="active" selected>Active</option>
                        <option value="deactive">Deactive</option>
                    </select>
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
                <button type="submit" class="btn btn-primary">Add Product Category</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>