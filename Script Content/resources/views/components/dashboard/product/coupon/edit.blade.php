<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12 p-5">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Edit Coupon') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('couponupdate', $coupon->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        {{-- Title --}}
                        <div class="form-group">
                            <label for="name">{{ __('Coupon Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="title" placeholder="Enter Coupon Name" name="name"
                                value="{{ old('name') }}{{ $coupon->name }}">
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="discount">{{ __('Discount') }}</label>
                                    <input type="number" class="form-control @error('discount') is-invalid @enderror"
                                        id="discount" placeholder="Enter Discount Ammount" name="discount"
                                        value="{{ old('discount') }}{{ $coupon->discount }}">
                                    @error('discount')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Type') }}</label>
                                    <select class="form-control @error('type') is-invalid @enderror" name="type">
                                        <option value="fixed" {{ $coupon->type == 'fixed' ? 'selected' : '' }}>
                                            {{ __('Fixed') }}</option>
                                        <option value="flat" {{ $coupon->type == 'flat' ? 'selected' : '' }}>
                                            {{ __('Percentage') }}</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="minOrder">{{ __('Minimum Order Ammount') }}</label>
                                    <input type="number" class="form-control @error('minOrder') is-invalid @enderror"
                                        id="minOrder" placeholder="Enter Minimum Order Ammount" name="minOrder"
                                        value="{{ old('minOrder') }}{{ $coupon->minOrder }}">
                                    @error('minOrder')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="maxOrder">{{ __('Maximum Order Ammount') }}</label>
                                    <input type="number" class="form-control @error('maxOrder') is-invalid @enderror"
                                        id="maxOrder" placeholder="Enter Maximum Order Ammount" name="maxOrder"
                                        value="{{ old('maxOrder') }}{{ $coupon->maxOrder }}">
                                    @error('maxOrder')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="limit">{{ __('Limit') }}</label>
                                    <input type="number" class="form-control @error('limit') is-invalid @enderror"
                                        id="limit" placeholder="Enter Limit" name="limit"
                                        value="{{ old('limit') }}{{ $coupon->limit }}">
                                    @error('limit')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expireDate">{{ __('Expire Date') }}</label>
                                    <input type="date" class="form-control @error('expireDate') is-invalid @enderror"
                                        id="expireDate" name="expireDate"
                                        value="{{ old('expireDate') }}{{ $coupon->expireDate }}">
                                    @error('expireDate')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('Status') }}</label>
                            <select class="form-control" name="status">
                                <option value="active" {{ $coupon->status == 'active' ? 'selected' : '' }}>
                                    {{ __('Active') }}</option>
                                <option value="deactive" {{ $coupon->status == 'deactive' ? 'selected' : '' }}>
                                    {{ __('Deactive') }}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Update Coupon') }}</button>
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
</section>
