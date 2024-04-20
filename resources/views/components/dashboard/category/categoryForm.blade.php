<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 m-auto">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Category</h3>
            </div>
            <form action="{{route('category.insert')}}" method="POST">
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
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>