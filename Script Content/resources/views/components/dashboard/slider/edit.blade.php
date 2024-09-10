<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">{{ __('Edit Slider') }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="shortTitle">{{ __('Short Title') }}</label>
                            <input type="text" name="shortTitle" placeholder="Short Title"
                                class="form-control  @error('shorTitle') 'is-invalid' @enderror"
                                value="{{ $slider->shortTitle }}">
                            @error('shortTitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="offerText">{{ __('Offer Text') }}</label>
                            <input type="text" name="offerText" placeholder="Offer Text"
                                class="form-control @error('offerText') 'is-invalid' @enderror"
                                value="{{ $slider->offerText }}">
                            @error('offerText')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <input type="text" name="description" placeholder="Description"
                                class="form-control @error('description') 'is-invalid' @enderror"
                                value="{{ $slider->description }}">
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="link">{{ __('Link') }}</label>
                            <input type="text" name="link" placeholder="Link"
                                class="form-control @error('link') 'is-invalid' @enderror" value="{{ $slider->link }}">
                            @error('link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <h6 class="text-bold">{{ __('Old Slider Image') }}</h6>
                            <img src="{{ asset($slider->backgroundImg) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="backgroundImg">{{ __('Slider Image') }}</label>
                            <input type="file" name="backgroundImg" id="backgroundImg"
                                class="form-control @error('backgroundImg') 'is-invalid' @enderror">
                            @error('backgroundImg')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Status">{{ __('Status') }}</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ $slider->status == 'active' ? 'selected' : '' }}>
                                    {{ __('Active') }}</option>
                                <option value="deactive" {{ $slider->status == 'deactive' ? 'selected' : '' }}>
                                    {{ __('Deactive') }}</option>
                            </select>
                        </div>
                        <button class="btn btn-primary">{{ __('Update Slider') }}</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</section>

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
