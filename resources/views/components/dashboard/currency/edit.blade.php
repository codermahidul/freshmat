<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12 p-5">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Edit Currency') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('currencyupdate', $getCurrency->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>{{ __('Select Currency') }}</label>
                            <select class="form-control" name="currency">
                                <option value="">--{{ __('Select One') }}--</option>
                                @foreach (config('currencies') as $code => $currency)
                                    <option {{ $getCurrency->currency == $code ? 'selected' : '' }}
                                        value="{{ $code }}">{{ $code }}</option>
                                @endforeach
                            </select>
                            @error('currency')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Status') }}</label>
                            <select class="form-control" name="status">
                                <option {{ $getCurrency->status == 'active' ? 'selected' : '' }} value="active"
                                    selected>{{ __('Active') }}</option>
                                <option {{ $getCurrency->status == 'deactive' ? 'selected' : '' }} value="deactive">
                                    {{ __('Deactive') }}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Update Currency') }}</button>
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
