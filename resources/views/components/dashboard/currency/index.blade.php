<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">Currency List</h2>
                <a href="{{ route('currencyadd') }}" class="btn btn-primary ml-auto">Add New</a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Currency Name</th>
                            <th>Status</th>
                            <th>Default</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($currencies as $currency)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td> {{ $currency->currency }} </td>
                                <td> {{ $currency->status }} </td>
                                <td> {{ $currency->default }} </td>
                                <td class="text-center">
                                    <a href="{{ route('currencyedit',$currency->id) }}" class="btn-sm btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('currencydelete',$currency->id) }}"
                                        class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr align="center">
                                <td colspan="10" class="py-5">No Coupon Found! <a
                                        href="{{ route('currencyadd') }}">Add New</a></td>
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
        $(document).ready(function() {

            $(document).on('click', '.delete-item', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');
                        $.ajax({
                            mthod: 'GET',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: data.message,
                                        icon: "success"
                                    });
                                    window.location.reload();
                                }else if(data.status == 'have'){
                                    Swal.fire({
                                        title: "error!",
                                        text: data.message,
                                        icon: "error"
                                    });
                                }
                                else if (data.status == 'error') {
                                  Swal.fire({
                                        title: "error!",
                                        text: data.message,
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                              Swal.fire({
                                        title: "error!",
                                        text: 'An error occurred while processing your request.',
                                        icon: "error"
                                    });
                            }
                        });
                    }
                });
            })

        })
    </script>
@endpush
