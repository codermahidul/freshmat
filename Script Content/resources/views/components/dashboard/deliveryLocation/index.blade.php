<div class="row">
    <div class="col-md-12 p-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="card-title">{{ __('Delivery Location list') }}</h2>
                <a href="{{ route('delivery.add') }}" class="btn btn-primary ml-auto">{{ __('Add New') }}</a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('#') }}</th>
                            <th>{{ __('Area') }}</th>
                            <th>{{ __('Charge') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($deliveryLocations as $dl)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td> {{ $dl->address }} </td>
                                <td> {{ $dl->charge }} </td>
                                <td> {{ $dl->status }} </td>
                                <td class="text-center">
                                    <a href="{{ route('delivery.edit', $dl->id) }}" class="btn-sm btn-primary"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('delivery.delete', $dl->id) }}"
                                        class="btn-sm btn-danger delete-item"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="py-5">{{ __('No Address Found!') }} <a
                                        href="{{ route('delivery.add') }}">{{ __('Add New') }}</a></td>
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
                                        title: "{{ __('Success!') }}",
                                        text: data.message,
                                        icon: "success",
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status == 'error') {
                                    Swal.fire({
                                        title: "{{ __('Warning!') }}",
                                        text: data.message,
                                        icon: "warning"
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                Swal.fire({
                                    title: "{{ __('Error!') }}",
                                    text: "{{ __('An error occurred while processing your request.') }}",
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
