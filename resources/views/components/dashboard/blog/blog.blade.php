<div class="row">
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
              @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->author }}</td>
                    {{-- <td>{{ $post->thumbnail }}</td> --}}
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
        <!-- /.card-body -->
        {{ $posts->links('pagination.dashboardPagination') }}
      </div>
    </div>
  </div>