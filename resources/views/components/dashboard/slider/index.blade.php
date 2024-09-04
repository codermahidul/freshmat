<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">{{ __('Add New Slider') }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{ route('sliderInsert') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="shortTitle">{{ __('Short Title') }}</label>
                <input type="text" name="shortTitle" placeholder="Short Title" class="form-control">
                @error('shortTitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="offerText">{{ __('Offer Text') }}</label>
                <input type="text" name="offerText" placeholder="Offer Text" class="form-control">
                @error('offerText')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">{{ __('Description') }}</label>
                <input type="text" name="description" placeholder="Description" class="form-control">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="link">{{ __('Link') }}</label>
                <input type="text" name="link" placeholder="Link" class="form-control">
                @error('link')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="backgroundImg">{{ __('Slider Image') }}</label>
                <input type="file" name="backgroundImg" id="backgroundImg" class="form-control">
                @error('backgroundImg')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="Status">{{ __('Status') }}</label>
                <select name="status" class="form-control">
                    <option value="active" selected>{{ __('Active') }}</option>
                    <option value="deactive">{{ __('Deactive') }}</option>
                </select>
            </div>
            <button class="btn btn-primary">{{ __('Add Slider') }}</button>
          </form>
        </div>

      </div>

      </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title">{{ __('Slider Item') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">{{ __('#') }}</th>
                    <th>{{ __('Short Title') }}</th>
                    <th>{{ __('Offer Text') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Link') }}</th>
                    <th class="text-center">{{ __('Action') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($sliders as $slider)
                    <tr>
                        <td> {{$loop->index +1}} </td>
                        <td> {{$slider->shortTitle}} </td>
                        <td> {{$slider->offerText}} </a></td>
                        <td> {{$slider->description}} </a></td>
                        <td> {{$slider->link}} </a></td>
                        <td class="text-center">
                            <a href="{{route('slider.edit',$slider->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{route('slider.delete',$slider->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      @empty
                      <tr align="center">
                        <td colspan="10" class="py-5">{{ __('No Slider Item! Add New') }}</td>
                      </tr>
                      @endforelse
                </tbody>
              </table>
            </div>
          </div>
                  <!-- Pagination -->
        {{ $sliders->links('pagination.dashboardPagination') }}
    </div>
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
