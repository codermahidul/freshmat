<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('Add New Coupon') }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('productinsert')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                {{-- Title --}}
                <div class="form-group">
                  <label for="title">{{ __('Coupon Name') }}</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" name="title" value="{{old('title')}}">
                    @error('title')
                        <span class="text-danger">
                            {{$message}}
                        </span>
                    @enderror
                </div> 
                <div class="form-group">
                  <label for="slug">{{ __('Discount') }}</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Enter Slug" name="slug" value="{{old('slug')}}">
                    @error('slug')
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
                <button type="submit" class="btn btn-primary">Add New Coupon</button>
            </form>
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
        </div>
      </div>
    </div>
  </section>