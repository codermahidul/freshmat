<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('Add New Location') }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('delivery.insert') }}" method="POST">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address">{{ __('Area') }}</label>
                      <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Enter Delivery Area" name="address" value="{{old('address')}}">
                        @error('address')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="charge">{{ __('Charge') }}</label>
                      <input type="number" class="form-control @error('charge') is-invalid @enderror" id="address" placeholder="Enter Charge Ammount" name="charge" value="{{old('charge')}}">
                        @error('charge')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="active" selected>Active</option>
                        <option value="deactive">Deactive</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Add Delivery Area</button>
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