<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h3 class="card-title">FAQs List</h3>
          <a href="{{route('faqs.add')}}" class="btn btn-primary ml-auto">Add New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Question</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            
                @forelse ($faqs as $faq)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$faq->question}}</td>
                    <td class="text-center"><a href="{{route('status',$faq->id)}}" class="btn-sm btn btn-danger<?php if($faq->status =='deactive'){echo 'btn btn-success';}?> ">{{ ($faq->status == 'active') ? 'Deactive' : 'Active' }}</a></td>
                    <td>
                        <a href="{{route('faqs.edit',$faq->id)}}" class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{route('faqs.delete',$faq->id)}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                @empty 
                <tr align="center">
                  <td colspan="10" class="py-5">No FAQs Found! <a href="{{ route('faqs.add') }}">Add New</a></td>
                </tr>
                @endforelse
            </tbody>
          </table>
          @if(session('success'))
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

          @if(session('deactive'))
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
                title: "{{ session('deactive') }}",
              })
            </script>
          @endif

          @if(session('active'))
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
                title: "{{ session('active') }}",
              })
            </script>
          @endif
        </div>
        <!-- Pagination -->
        {{ $faqs->links('pagination.dashboardPagination') }}
      </div>
    </div>
  </div>