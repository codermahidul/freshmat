<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">FAQs List</h3>
          <a href="{{route('category.add')}}" class="btn btn-primary ml-auto">Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>Slug</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                    <td> {{$loop->index +1}} </td>
                    <td> {{$category->name}} </td>
                    <td> {{$category->slug}} </a></td>
                    <td class="text-center">
                        <a href="{{route('category.edit',$category->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{route('category.delete',$category->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
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
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>