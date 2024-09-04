<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">{{ __('New Partner') }}</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('partnerInsert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="logo">{{ __('Logo') }}</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                        @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">{{ __('Status') }}</label>
                        <select name="status" class="form-control">
                            <option value="active" selected>{{ __('Active') }}</option>
                            <option value="deactive">{{ __('Deactive') }}</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">{{ __('Add Partner') }}</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title">{{ __('Partners') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">{{ __('#') }}</th>
                    <th>{{ __('Logo') }}</th>
                    <th class="text-center">{{ __('Action') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($partners as $partner)
                    <tr>
                        <td> {{$loop->index +1}} </td>
                        <td>
                            <img src="{{ asset($partner->logo) }}" alt="">
                        </td>
                        <td class="text-center">
                            <a href="{{route('partner.edit',$partner->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{route('partner.delete',$partner->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
        {{ $partners->links('pagination.dashboardPagination') }}
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
