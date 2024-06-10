{{-- <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">Blog Post</h3>
          <a href="{{route('blog.add')}}" class="btn btn-primary ml-auto">Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 4%">#</th>
                <th style="width: 30%">Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Thumbnail</th>
                <th>React</th>
                <th>Status</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($posts as $post)
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                      <img src="{{ asset($post->thumbnail) }}" class="img-thumbnail" width="100">
                    </td>
                    <td>{{ $post->react }}</td>
                    <td>{{ $post->status }}</td>
                    <td class="text-center">
                        <a href="{{route('blog.edit',$post->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{route('blog.delete',$post->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @empty
                  <tr align="center">
                    <td colspan="10" class="py-5">No Post Found! <a href="{{ route('blog.add') }}">Add New</a></td>
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
        <!-- Pagination -->
        {{ $posts->links('pagination.dashboardPagination') }}
      </div>
    </div>
  </div>


 --}}


 <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="card-title">All Post</h2>
        <a href="{{route('blog.add')}}" class="btn btn-primary ml-auto">Add New</a>
      </div>
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </thead>
          <tbody>
            @forelse ($posts as $post)
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category }}</td>
                <td>{{ $post->author }}</td>
                <td>
                  <img src="{{ asset($post->thumbnail) }}" class="img-thumbnail" width="100">
                </td>
                <td>{{ $post->react }}</td>
                <td>{{ $post->status }}</td>
                <td class="text-center">
                    <a href="{{route('blog.edit',$post->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="{{route('blog.delete',$post->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              @empty
              <tr align="center">
                <td colspan="10" class="py-5">No Post Found! <a href="{{ route('blog.add') }}">Add New</a></td>
              </tr>
              @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
 </div>



  
  @push('scripts')
  <script>
      $(function() {
          $("#example1").DataTable({
              "responsive": true,
              "lengthChange": true,
              "autoWidth": true,
              "buttons": ["excel", "pdf", "print"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

          $('#example2').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true,
              "responsive": true,
          });
      });
  </script>
@endpush


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