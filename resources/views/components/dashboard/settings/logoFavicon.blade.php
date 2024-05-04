<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <form action="{{ route('logoFavicon') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                    <div class="mb-3">
                        <p>Existing Logo</p>
                        <img src="{{ asset('assets/images/logo.png') }}" class="rounded d-block" alt="...">
                    </div>
                        <div class="form-group">
                          <label for="exampleInputFile"> {{ __('New Logo') }} </label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" id="logo" name="logo" value="{{ old('logo') }}">
                              <label class="custom-file-label" for="logo">Choose file</label>
                            </div>
                          </div>
                          @error('logo')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <p>Existing Footer Logo</p>
                            <img src="{{ asset('assets/images/footer_logo.png') }}" class="rounded d-block" alt="...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile"> {{ __('New Footer Logo') }} </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input @error('footerlogo') is-invalid @enderror" id="footerlogo" name="footerlogo" value="{{ old('footerlogo') }}">
                                <label class="custom-file-label" for="footerlogo">Choose file</label>
                              </div>
                            </div>
                            @error('footerlogo')
                              <span class="text-danger">
                                  {{$message}}
                              </span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <p>Existing Favicon</p>
                            <img src="{{ asset('assets/images/favicon.png') }}" class="rounded d-block" alt="...">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputFile"> {{ __('Favicon') }} </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input @error('favicon') is-invalid @enderror" id="favicon" name="favicon" value="{{ old('logo') }}">
                                <label class="custom-file-label" for="favicon">Choose file</label>
                              </div>
                            </div>
                            @error('favicon')
                              <span class="text-danger">
                                  {{$message}}
                              </span>
                            @enderror
                          </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
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