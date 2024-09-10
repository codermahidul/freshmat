<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Footer Top') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('footerTopUdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>{{ __('Section 1') }}</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <label>{{ __('Previous Icon') }}</label>
                                <div class="image">
                                    <img src="{{ asset(footerTop(1)->icon) }}" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="icon1">{{ __('Icon') }}</label>
                                    <input type="file" name="icon1" id="icon1" class="form-control">
                                    @error('icon1')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="heading1">{{ __('Heading') }}</label>
                                    <input type="text" name="heading1" id="heading1" class="form-control"
                                        placeholder="Heading" value="{{ footerTop(1)->heading }}">
                                    @error('heading1')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subheading1">{{ __('Sub Heading') }}</label>
                                    <input type="text" name="subheading1" id="subheading1" class="form-control"
                                        placeholder="Sub Heading" value="{{ footerTop(1)->subheading }}">
                                    @error('subheading1')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>{{ __('Section 2') }}</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Previous Icon</label>
                                <div class="image">
                                    <img src="{{ asset(footerTop(2)->icon) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="icon2">{{ __('Icon') }}</label>
                                    <input type="file" name="icon2" id="icon2" class="form-control">
                                    @error('icon2')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="heading2">{{ __('Heading') }}</label>
                                    <input type="text" name="heading2" id="heading2" class="form-control"
                                        placeholder="Heading" value="{{ footerTop(2)->heading }}">
                                    @error('heading2')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subheading2">{{ __('Sub Heading') }}</label>
                                    <input type="text" name="subheading2" id="subheading2" class="form-control"
                                        placeholder="Sub Heading" value="{{ footerTop(2)->subheading }}">
                                    @error('subheading2')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>{{ __('Section 3') }}</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <label>{{ __('Previous Icon') }}</label>
                                <div class="image">
                                    <img src="{{ asset(footerTop(3)->icon) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="icon3">{{ __('Icon') }}</label>
                                    <input type="file" name="icon3" id="icon3" class="form-control">
                                    @error('icon3')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="heading3">{{ __('Heading') }}</label>
                                    <input type="text" name="heading3" id="heading3" class="form-control"
                                        placeholder="Heading" value="{{ footerTop(3)->heading }}">
                                    @error('heading3')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subheading3">{{ __('Sub Heading') }}</label>
                                    <input type="text" name="subheading3" id="subheading3" class="form-control"
                                        placeholder="Sub Heading" value="{{ footerTop(3)->subheading }}">
                                    @error('subheading3')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>{{ __('Section 4') }}</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <label>{{ __('Previous Icon') }}</label>
                                <div class="image">
                                    <img src="{{ asset(footerTop(4)->icon) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="icon4">{{ __('Icon') }}</label>
                                    <input type="file" name="icon4" id="icon4" class="form-control">
                                    @error('icon4')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="heading4">{{ __('Heading') }}</label>
                                    <input type="text" name="heading4" id="heading4" class="form-control"
                                        placeholder="Heading" value="{{ footerTop(4)->heading }}">
                                    @error('heading4')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subheading4">{{ __('Sub Heading') }}</label>
                                    <input type="text" name="subheading4" id="subheading4" class="form-control"
                                        placeholder="Sub Heading" value="{{ footerTop(4)->subheading }}">
                                    @error('subheading4')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
                        </div>
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
