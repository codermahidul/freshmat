<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Variable</th>
                                <th scope="col">Meaning</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>&#123;&#123;name&#125;&#125;
                                <th scope="row">User Name</th>
                                </td>
                              </tr>
                              <tr>
                                  <td>&#123;&#123;email&#125;&#125;</td>
                                <th scope="row">User email</th>
                              </tr>
                              <tr>
                                  <td>&#123;&#123;phone&#125;&#125;</td>
                                <th scope="row">User Phone Number</th>
                              </tr>
                              <tr>
                                  <td>&#123;&#123;subject&#125;&#125;</td>
                                <th scope="row">Subject of email</th>
                              </tr>
                              <tr>
                                  <td>&#123;&#123;message&#125;&#125;</td>
                                <th scope="row">Message</th>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __($emailTemplate->title) }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('emailTemplate.update',$emailTemplate->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                {{-- Title --}}
                <div class="form-group">
                  <label for="title">{{ __('Title') }}</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" name="title" value="{{ $emailTemplate->title }}">
                @error('title')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="seotitle"> {{ __('Subject') }} </label>
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" placeholder="Subject" name="subject" value="{{ $emailTemplate->subject }}">
                  @error('subject')
                      <span class="text-danger">
                          {{$message}}
                      </span>
                  @enderror
                  </div>
                  {{-- Post Description --}}
                <div class="form-group">
                  <label for="description"> {{ __('Description') }} </label>
                  <textarea id="postdescription"  name="description">{!! $emailTemplate->content !!}</textarea>
                    @error('description')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
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
