<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Order list</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped dataTable dtr-inline" id="example1">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Order Id</td>
                            <td>Custormer Name</td>
                            <td>Quantity</td>
                            <td>Discount</td>
                            <td>Payable</td>
                            <td>Total</td>
                            <td>Status</td>
                            <td>Payment</td>
                            <td>Order Date</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)     
                        <tr>
                            <td>{{ ++$loop->index }}</td>
                            <td>{{ $order->invoiceNumber }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>
                              @php
                                  $quantity = 0;
                                  foreach ($order->invoiceProducts as $products) {
                                    $quantity += $products->quantity;
                                  }
                                  echo $quantity;
                              @endphp
                            </td>
                            <td>{{ $order->discount }}</td>
                            <td>{{ $order->total-$order->discount }}</td>
                            <td>{{ $order->total }}</td>
                            <td>
                              @if ($order->status == 'complete' )
                              <span class="badge badge-success">Complete</span>
                              @elseif($order->status == 'cancel')
                              <span class="badge badge-danger">Cancel</span>                                 
                              @elseif($order->status == 'new')
                              <span class="badge badge-primary">New</span>
                              @elseif($order->status == 'delevery-in-process')
                              <span class="badge badge-warning">Delevery Processing</span>
                              @endif
                          </td>
                          <td>
                              @if ($order->payment == 'success')
                              <span class="badge badge-success">Success</span>
                              @else
                              <span class="badge badge-warning">Pending</span>
                              @endif
                          </td>
                            <td>{{ $order->created_at->format('d-M-Y') }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="#">
                                  <i class="fas fa-eye"></i>
                                </a>                                
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-{{ $order->id }}">
                                  <i class="fas fa-car-side"></i>
                                </button>
                            </td>
                        </tr>
                        @empty
                            No order found!
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{-- Modal --}}
@foreach ($orders as $order)  
<div class="modal fade" id="modal-default-{{ $order->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Order Status</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('orderStatus', $order->id) }}" method="post">
          @csrf
          <div class="form-group">
            <label for="payment">Payment</label>
            <select name="payment" id="payment" class="form-control">
              <option {{ ( $order->payment == 'pending' ) ? 'selected' : '' }} value="pending">Pending</option>
              <option {{ ( $order->payment == 'success' ) ? 'selected' : '' }} value="success">Success</option>
            </select>
          </div>          
          <div class="form-group">
            <label for="status">Order</label>
            <select name="status" id="status" class="form-control">
              <option {{ ( $order->status == 'new' ) ? 'selected' : '' }} value="new">New</option>
              <option {{ ( $order->status == 'delevery-in-process' ) ? 'selected' : '' }} value="delevery-in-process">Delevery In Process</option>
              <option {{ ( $order->status == 'complete' ) ? 'selected' : '' }} value="complete">Complate</option>
              <option {{ ( $order->status == 'cancel' ) ? 'selected' : '' }} value="cancel">Canceled</option>
            </select>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach
{{-- Modal --}}

@push('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": false,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
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