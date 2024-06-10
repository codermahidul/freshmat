{{-- <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">Comments</h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 4%">#</th>
                <th style="width: 30%">Post Title</th>
                <th>User Name</th>
                <th>Comment</th>
                <th>Status</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comments as $comment)
                <tr>
                    <td>{{++$loop->index}}</td>
                    <td>{{$comment->postTitle}}</td>
                    <td>{{$comment->userName}}</td>
                    <td>{{$comment->content}}</td>
                    <td class="text-center"><a href="{{route('blog.comment.status',$comment->id)}}" class="btn-sm btn btn-danger<?php if($comment->status =='approve'){echo 'btn btn-success';}?> ">{{$comment->status}}</a></td>
                    <td class="text-center">
                        <a href="{{route('blog.comment.reply',$comment->id)}}" class="btn-sm btn-primary"><i class="fas fa-reply"></i></a>
                        <a href="{{route('blog.comment.delete',$comment->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
          </table>
        </div>
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
  </div> --}}



  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h2 class="card-title">Comments List</h2>

        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Post Title</th>
              <th>User Name</th>
              <th>Comment</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($comments as $comment)
              <tr>
                  <td>{{++$loop->index}}</td>
                  <td>{{$comment->postTitle}}</td>
                  <td>{{$comment->userName}}</td>
                  <td>{{$comment->content}}</td>
                  <td class="text-center"><a href="{{route('blog.comment.status',$comment->id)}}" class="btn-sm btn btn-danger<?php if($comment->status =='approve'){echo 'btn btn-success';}?> ">{{$comment->status}}</a></td>
                  <td class="text-center">
                      <a href="{{route('blog.comment.reply',$comment->id)}}" class="btn-sm btn-primary"><i class="fas fa-reply"></i></a>
                      <a href="{{route('blog.comment.delete',$comment->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
                @endforeach
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