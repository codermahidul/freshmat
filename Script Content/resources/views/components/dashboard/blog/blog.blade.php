<div class="row">
    <div class="col-md-12 p-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">{{ __('Blog Post') }}</h3>
                <a href="{{ route('blog.add') }}" class="btn btn-primary ml-auto">{{ __('Add New') }}</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped dataTable dtr-inline" id="example1">
                    <thead>
                        <tr>
                            <td>{{ __('#') }}</td>
                            <td>{{ __('Title') }}</td>
                            <td>{{ __('Category') }}</td>
                            <td>{{ __('Author') }}</td>
                            <td>{{ __('Thumbnail') }}</td>
                            <td>{{ __('React') }}</td>
                            <td>{{ __('Status') }}</td>
                            <td>{{ __('Action') }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category }}</td>
                                <td>{{ $post->author }}</td>
                                <td>
                                    <img src="{{ asset($post->thumbnail) }}" class="img-thumbnail" width="100">
                                </td>
                                <td>{{ $post->react }}</td>
                                <td>{{ $post->status }}</td>
                                <td class="text-center">
                                    <a href="{{ route('blog.edit', $post->id) }}" class="btn-sm btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('blog.delete', $post->id) }}"
                                        class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="py-5">{{ __('No Post Found!') }} <a
                                        href="{{ route('blog.add') }}">{{ __('Add
                                                                                New') }}</a>
                                </td>
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
                            method: 'GET',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: data.message,
                                        icon: "success"
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status == 'error') {
                                    Swal.fire({
                                        title: "Error!",
                                        text: data.message,
                                        icon: "error"
                                    })
                                }
                            },
                            error: function(xhr, status, error) {
                                Swal.fire({
                                    title: "Error!",
                                    text: "An error occurred while processing your request.",
                                    icon: "error"
                                });
                            }
                        })

                    }
                });

            })




        })
    </script>
@endpush
