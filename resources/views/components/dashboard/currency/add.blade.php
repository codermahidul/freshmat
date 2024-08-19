<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('Add New Currency') }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('currencyinsert') }}" method="POST">
                @csrf
              <div class="card-body">
                  <div class="form-group">
                    <label>Select Currency</label>
                    <select class="form-control" name="currency">
                        <option value="" selected>--Select One--</option>
                        @foreach (config('currencies') as $code => $currency)
                        <option value="{{ $code }}">{{ $code }}</option>
                        @endforeach
                    </select>
                    @error('currency')
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
                <button type="submit" class="btn btn-primary">Add New Currency</button>
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
