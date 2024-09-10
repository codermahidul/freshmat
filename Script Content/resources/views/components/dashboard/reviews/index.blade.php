<div class="row">
    <div class="col-md-12 p-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">{{ __('All Reviews') }}</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped dataTable dtr-inline" id="example1">
                    <thead>
                        <tr>
                            <td>{{ __('#') }}</td>
                            <td>{{ __('Name') }}</td>
                            <td>{{ __('Product') }}</td>
                            <td>{{ __('Content') }}</td>
                            <td>{{ __('Rating') }}</td>
                            <td>{{ __('Date') }}</td>
                            <td>{{ __('Status') }}</td>
                            <td>{{ __('Action') }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reviews as $review)
                            <tr>
                                <td>{{ ++$loop->index }}</td>
                                <td>{{ $review->user->name }}</td>
                                <td>{{ $review->product->title }}</td>
                                <td>{{ $review->review }}</td>
                                <td>{{ $review->rating }}</td>
                                <td>{{ $review->created_at->format('d-M-Y') }}</td>
                                <td>
                                    @if ($review->status == 'approved')
                                        <span class="badge badge-success">{{ __('Approved') }}</span>
                                    @else
                                        <span class="badge badge-warning">{{ __('Pending') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modal-default-{{ $review->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                    <a class="btn btn-danger btn-sm delete-item" href="{{ route('reviews.delete',$review->id) }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            {{ __('No review found!') }}
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



{{-- Modal --}}
@foreach ($reviews as $review)
    <div class="modal fade" id="modal-default-{{ $review->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Status') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('reviews.update',$review->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="status">{{ __('Status') }}</label>
                            <select name="status" id="status" class="form-control">
                                <option {{ $review->status == 'pending' ? 'selected' : '' }} value="pending">
                                    {{ __('Pending') }}</option>
                                <option {{ $review->status == 'approved' ? 'selected' : '' }} value="approved">
                                    {{ __('Approved') }}</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save changes') }}</button>
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
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: data.message,
                                icon: "error"
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: "Error!",
                            text: "An error occurred while processing your request.",
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
