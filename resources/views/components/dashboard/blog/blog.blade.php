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
                <th style="width: 10px">#</th>
                <th>Title</th>
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
                    <td>{{ $post->thumbnail }}</td>
                    <td>{{ $post->react }}</td>
                    <td>{{ $post->status }}</td>
                    <td class="text-center">
                        <a href="#" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
          </table>
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