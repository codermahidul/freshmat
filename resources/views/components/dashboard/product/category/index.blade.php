<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">Product Category List</h2>
                <a href="{{ route('productCategoryAdd') }}" class="btn btn-primary ml-auto">Add New</a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Icon</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($productcategory as $category)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td> {{ $category->name }} </td>
                                <td> {{ $category->slug }} </td>
                                <td width="10">
                                    <img src="{{ asset($category->icon) }}" alt="">
                                </td>
                                <td> {{ $category->status }} </td>
                                <td class="text-center">
                                    <a href="{{ route('productcategoryedit', $category->id) }}"
                                        class="btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('productcategorydelete', $category->id) }}"
                                        class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr align="center">
                                <td colspan="10" class="py-5">No Product Category Found <a
                                        href="{{ route('productCategoryAdd') }}">Add New</a></td>
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

            $('.delete-item').on('click', function(e) {
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
                    let url = $(this).attr('href');
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'GET',
                            url: url,
                            success: function(data) {
                              console.log(data.status)
                                if (data.status == 'success') {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: data.message,
                                        icon: "success"
                                    })
                                    window.location.reload();
                                } else if(data.status == 'have'){
                                  Swal.fire({
                                        title: "Warning!",
                                        text: data.message,
                                        icon: "warning"
                                    })
                                }
                                else {
                                    Swal.fire({
                                        title: "Error!",
                                        text: data.message,
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error)
                            }
                        });
                    }
                });

            })


            //end
        })
    </script>
@endpush
