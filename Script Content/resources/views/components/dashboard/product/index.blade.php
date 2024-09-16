<div class="row">
    <div class="col-md-12 p-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">{{ __('Products List') }}</h3>
                <a href="{{ route('productadd') }}" class="btn btn-primary ml-auto">{{ __('Add New') }}</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Product Title') }}</th>
                            <th>{{ __('Category') }}</th>
                            <th>{{ __('Thumbnail') }}</th>
                            <th>{{ __('Price') }}</th>
                            <th>{{ __('Unit Type') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td> {{ $product->title }} </td>
                                <td> {{ $product->productcategories->name }} </td>
                                <td width="10">
                                    <img width="80px" src="{{ asset($product->thumbnail) }}" alt="">
                                </td>
                                <td> <del>{{ $product->regularPrice }}</del> {{ $product->selePrice }} </td>
                                <td> {{ $product->unitType }} </td>
                                <td> {{ $product->status }} </td>
                                <td class="text-center">
                                    <a href="{{ route('productedit', $product->id) }}" class="btn-sm btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('productdelete', $product->id) }}" class="btn-sm btn-danger delete-item"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="py-5">{{ __('No Product Found!') }} <a
                                        href="{{ route('productadd') }}">{{ __('Add New') }}</a></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
    $(document).on('click', '.delete-item', function(e) {
        e.preventDefault();
        Swal.fire({
            title: {{ __("Are you sure?") }},
            text: {{ __("You won't be able to revert this!") }},
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: {{ __("Yes, delete it!") }}
        }).then((result) => {
            if (result.isConfirmed) {
                let url = $(this).attr('href');
                $.ajax({
                    method: 'GET',
                    url: url,
                    success: function(data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                title: {{ __("Deleted!") }},
                                text: data.message,
                                icon: "success"
                            }).then(() => {
                                  window.location.reload();
                                });
                        } else if(data.status == 'have') {
                            Swal.fire({
                                title:{{ __( "Warning!") }},
                                text: data.message,
                                icon: "warning"
                            });
                        } else {
                            Swal.fire({
                                title: {{ __("Error!") }},
                                text: data.message,
                                icon: "error"
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: {{ __("Error!") }},
                            text: {{ __("An error occurred while processing your request.") }},
                            icon: "error"
                        });
                    }
                });
            }
        });
    });
});
</script>
@endpush
