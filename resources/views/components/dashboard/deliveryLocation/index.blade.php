<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">Delivery Locations</h3>
          <a href="{{ route('delivery.add') }}" class="btn btn-primary ml-auto">Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Area</th>
                <th>Charge</th>
                <th>Status</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                  @forelse ($deliveryLocations as $dl)
                  <tr>
                    <td> {{$loop->index +1}} </td>
                    <td> {{$dl->address}} </td>
                    <td> {{$dl->charge}} </td>
                    <td> {{ $dl->status}} </td>
                    <td class="text-center">
                        <a href="{{ route('delivery.edit',$dl->id) }}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('delivery.delete',$dl->id) }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @empty
                      <tr align="center">
                        <td colspan="10" class="py-5">No Address Found! <a href="{{ route('delivery.add') }}">Add New</a></td>
                      </tr>
                  @endforelse
            </tbody>
          </table>
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
      </div>
        <!-- Pagination -->
        {{ $deliveryLocations->links('pagination.dashboardPagination') }}
      </div>
    </div>
  </div>