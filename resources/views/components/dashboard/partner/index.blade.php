<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">New Partner</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('partnerInsert') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                        @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="active" selected>Active</option>
                            <option value="deactive">Deactive</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Add Partner</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title">Partners</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Logo</th>
                    <th class="text-center">Action</th>
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
                            <a href="{{route('slider.edit',$partner->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="{{route('slider.delete',$partner->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      @empty 
                      <tr align="center">
                        <td colspan="10" class="py-5">No Slider Item! Add New</td>
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