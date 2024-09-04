<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('Edit Delivery Location') }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('delivery.update',$deliveryLocation->id) }}" method="POST">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address">{{ __('Area') }}</label>
                      <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Enter Delivery Area" name="address" value="{{old('address')}}{{ $deliveryLocation->address }}">
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
                      <input type="number" class="form-control @error('charge') is-invalid @enderror" id="address" placeholder="Enter Charge Ammount" name="charge" value="{{old('charge')}}{{ $deliveryLocation->charge }}">
                        @error('charge')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <label>{{ __('Status') }}</label>
                    <select class="form-control" name="status">
                        <option value="active" {{ ($deliveryLocation->status == 'active') ? 'selected' : '' }}>{{ __('Active') }}</option>
                        <option value="deactive" {{ ($deliveryLocation->status == 'deactive') ? 'selected' : '' }}>{{ __('Deactive') }}</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">{{ __('Update Delivery Area') }}</button>
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
