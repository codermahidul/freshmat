<section class="content">
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="card-title">{{ __('Comments List') }}</h2>

                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Post Title') }}</th>
                                <th>{{ __('User Name') }}</th>
                                <th>{{ __('Comment') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $comment->postTitle }}</td>
                                    <td>{{ $comment->userName }}</td>
                                    <td>{{ $comment->content }}</td>
                                    <td class="text-center"><a href="{{ route('blog.comment.status', $comment->id) }}"
                                            class="btn-sm btn btn-danger<?php if ($comment->status == 'approve') {
                                                echo 'btn btn-success';
                                            } ?> ">{{ $comment->status }}</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('blog.comment.reply', $comment->id) }}"
                                            class="btn-sm btn-primary"><i class="fas fa-reply"></i></a>
                                        <a href="{{ route('blog.comment.delete', $comment->id) }}"
                                            class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete-item', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "{{ __('Are you sure?') }}",
                    text: "{{ __('You won\'t be able to revert this!') }}",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "{{ __('Yes, delete it!') }}"
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');

                        $.ajax({
                            method: 'GET',
                            url: url,
                            success: function(data) {
                                if (data.status == 'success') {
                                    Swal.fire({
                                        title: "{{ __('Deleted!') }}",
                                        text: data.message,
                                        icon: "success"
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status == 'error') {
                                    Swal.fire({
                                        title: "__('Error!')",
                                        text: data.message,
                                        icon: "error"
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                Swal.fire({
                                    title: "{{ __('Error!') }}",
                                    text: "{{ __('An error occurred while processing your request!') }}",
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
